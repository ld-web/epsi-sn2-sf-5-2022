<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
  /**
   * @Route("/", name="app_promo")
   */
  public function promo(): Response
  {
    return $this->render('index/promo.html.twig');
  }

  /**
   * @Route("/home", name="app_index")
   */
  public function index(): Response
  {
    return $this->render('index/index.html.twig', [
      'controller_name' => 'IndexController',
      'username' => 'Bobby'
    ]);
  }

  /**
   * @Route("/contact", name="app_contact")
   */
  public function contact(): Response
  {
    return $this->render('index/contact.html.twig');
  }
}
