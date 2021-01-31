<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArtikelController extends AbstractController
{
    #[Route('/artikel', name: 'artikel')]
    public function index(): Response
    {
        return $this->render('artikel/index.html.twig', [
            'controller_name' => 'ArtikelController',
        ]);
    }
}
