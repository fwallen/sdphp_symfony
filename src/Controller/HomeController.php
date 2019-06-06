<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends AbstractController
{
    public function index()
    {
        return $this->render('first.html.twig');
    }

    public function plain()
    {
        return $this->render('plain.html.twig', [
            'dynamic' => '<h2>Here is a title</h2>',
        ]);
    }
}