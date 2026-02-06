<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GardienController extends AbstractController
{
    #[Route('/gardien/ajouter', name: 'app_gardien_ajouter')]
    public function ajouter(): Response
    {
        return $this->render('gardien/ajouter.html.twig');
    }
}