<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CimetieresController extends AbstractController
{
    /**
     * @Route("/cimetieres", name="cimetieres")
     */
    public function index(): Response
    {
        return $this->render('cimetieres/index.html.twig', [
            'controller_name' => 'CimetieresController',
        ]);
    }
}
