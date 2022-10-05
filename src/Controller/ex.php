<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ex extends AbstractController
{
    #[Route('/getInfo/{nbr}', name: 'app_new4')]
    public function index($nbr): Response
    {   
        return $this->render('getInfo/432.html.twig', [
            'controller_name' => $nbr,
        ]);
    }
}
