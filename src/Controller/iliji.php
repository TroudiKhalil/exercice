<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class iliji extends AbstractController
{
    #[Route('/teacher/iliji', name: 'app_new3')]
    public function index(): Response
    {   
        return $this->render('teacher/iliji.html.twig', [
            'controller_name' => 'iliji',
        ]);
    }
}
