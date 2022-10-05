<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StudentController extends AbstractController
{
    #[Route('/index', name: 'app_new')]
    public function index(): Response
    {    return new Response(
        '<html><body>Lucky number: bonjour s</body></html>');

        return $this->render('new/index.html.twig', [
            'controller_name' => 'NewController',
        ]);
    }
}
