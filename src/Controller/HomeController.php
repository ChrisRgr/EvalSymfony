<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(EntityManagerInterface $em): Response
    {
        $productList = $em->getRepository(Product::class)->findAll();
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController', 'productList' => $productList
        ]);
    }
}
