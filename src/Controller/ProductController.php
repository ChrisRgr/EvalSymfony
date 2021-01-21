<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\User;
use App\Form\ProductFormType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\RedirectController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /**
     * @Route("/product",name="app_product")
     */
    public function index(EntityManagerInterface $em)
    {
        $productList =  $em->getRepository(Product::class)->findAll();

        return $this->render('product/index.html.twig', [
            'controller_name' => 'HomeController', 'productList' => $productList
        ]);
    }
    /**
     * @Route("/product/add", name="app_product_add")
     */
    public function add(Request $request): Response
    {
        $user = $this->getUser()->getRoles();;
        if (!in_array("ROLE_ADMIN", $user)) {
            $this->addFlash('success', 'You need to be an administrator to enter this page');
            return $this->redirectToRoute('app_home');
        }
        $product = new Product();
        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $product->setSlug($product->getName());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($product);
            $entityManager->flush();
            $this->addFlash('success', 'Product  ' . $product->getName() . ' was fully saved');

            return $this->redirectToRoute('app_home');
        }
        return $this->render('product/add.html.twig', [
            'controller_name' => 'ProductController', 'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/product/edit/{id}",name="app_product_edit")
     */
    public function update(Request $request, int $id): Response
    {
        $user = $this->getUser()->getRoles();;
        if (!in_array("ROLE_ADMIN", $user)) {
            $this->addFlash('success', 'You need to be an administrator to enter this page');
            return $this->redirectToRoute('app_home');
        }

        $entityManager = $this->getDoctrine()->getManager();
        $product = $entityManager->getRepository(Product::class)->find($id);

        $form = $this->createForm(ProductFormType::class, $product);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Edition completed');

            return $this->redirectToRoute('app_product');
        }
        return $this->render("product/edit.html.twig", ["form" => $form->createView()]);
    }
    /**
     * @Route("/product/delete/{id}",name="app_product_delete")
     */
    public function delete(EntityManagerInterface $em, ProductRepository $productRepository,  $id): Response
    {
        $user = $this->getUser()->getRoles();;
        if (!in_array("ROLE_ADMIN", $user)) {
            $this->addFlash('success', 'You need to be an administrator to enter this page');
            return $this->redirectToRoute('app_home');
        }
        $product = $productRepository->find($id);
        $em->remove($product);
        $em->flush();

        $this->addFlash('success', 'Delete completed');

        return $this->redirectToRoute('app_category');
    }
}
