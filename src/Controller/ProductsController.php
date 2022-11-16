<?php

namespace App\Controller;

use App\Repository\ProductRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductsController extends AbstractController
{
  /**
   * @Route("/products", name="products_list")
   */
  public function index(ProductRepository $productRepository): Response
  {
    $products = $productRepository->findAll();

    return $this->render('products/list.html.twig', [
      'products' => $products,
    ]);
  }
}
