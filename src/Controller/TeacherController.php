<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    #[Route('/teacher', name: 'app_teacher')]
    public function showTeacher(): Response
    {   $z='...';
        return new Response(
            '<html><body>Lucky number: bonjour '.$z.' 
            <a href="/index">eeeee</a>
            </body></html>');
        

        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
}
