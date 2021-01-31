<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewController extends AbstractController
{
    #[Route('/view', name: 'view')]
    public function index(): Response
    {
        $tag = date("l");

        $user = [
            'name' => 'möp',
            'nachname' => 'se',
            'alter' => '1001',
        ];

        $array = array("test1","test2",$tag,'3');

        return $this->render('view/index.html.twig', [
            'd' => $tag,
            'user' => $user,
            'a' => $array,
        ]);
    }
}
