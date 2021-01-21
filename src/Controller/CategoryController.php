<?php

namespace App\Controller;

use App\Entity\Category;
use App\Form\CategoryFormType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category",name="app_category")
     */
    public function index(EntityManagerInterface $em)
    {
        $categoryList =  $em->getRepository(Category::class)->findAll();

        return $this->render('category/index.html.twig', [
            'controller_name' => 'HomeController', 'categoryList' => $categoryList
        ]);
    }
    /**
     * @Route("/category/add", name="app_category_add")
     */
    public function add(Request $request): Response
    {
        $user = $this->getUser()->getRoles();;
        if (!in_array("ROLE_ADMIN", $user)) {
            $this->addFlash('success', 'You need to be an administrator to enter this page');
            return $this->redirectToRoute('app_home');
        }
        $category = new Category();
        $form = $this->createForm(CategoryFormType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($category);
            $entityManager->flush();
            $this->addFlash('success', 'Product  ' . $category->getName() . ' was fully saved');

            return $this->redirectToRoute('app_home');
        }
        return $this->render('category/add.html.twig', [
            'controller_name' => 'CategoryController', 'form' => $form->createView()
        ]);
    }
    /**
     * @Route("/category/edit/{id}",name="app_category_edit")
     */
    public function update(Request $request, int $id): Response
    {
        $user = $this->getUser()->getRoles();;
        if (!in_array("ROLE_ADMIN", $user)) {
            $this->addFlash('success', 'You need to be an administrator to enter this page');
            return $this->redirectToRoute('app_home');
        }
        $category = new Category();
        $entityManager = $this->getDoctrine()->getManager();
        $category = $entityManager->getRepository(Category::class)->find($id);

        $form = $this->createForm(CategoryFormType::class, $category);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();
            $this->addFlash('success', 'Edition completed');

            return $this->redirectToRoute('app_category');
        }
        return $this->render("category/edit.html.twig", ["form" => $form->createView()]);
    }
    /**
     * @Route("/category/delete/{id}",name="app_category_delete")
     */
    public function delete(EntityManagerInterface $em, CategoryRepository $categoryRepository,  $id): Response
    {
        $user = $this->getUser()->getRoles();;
        if (!in_array("ROLE_ADMIN", $user)) {
            $this->addFlash('success', 'You need to be an administrator to enter this page');
            return $this->redirectToRoute('app_home');
        }
        $category = $categoryRepository->find($id);
        $em->remove($category);
        $em->flush();

        $this->addFlash('success', 'Delete completed');

        return $this->redirectToRoute('app_category');
    }
}
