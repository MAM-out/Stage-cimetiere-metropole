<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GestionnairesController extends AbstractController
{
    /**
     * @Route("/gestionnaires", name="gestionnaires")
     */
    public function index(): Response
    {
        return $this->render('gestionnaires/index.html.twig', [
            'controller_name' => 'GestionnairesController',
        ]);
    }







}
