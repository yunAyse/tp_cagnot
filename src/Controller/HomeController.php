<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/create', name: 'app_create')]
    public function create(): Response
    {
        return $this->render('home/create.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/payment', name: 'app_payment')]
    public function payment(): Response
    {
        return $this->render('home/payment.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/show', name: 'app_show')]
    public function show(): Response
    {
        return $this->render('home/show.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
