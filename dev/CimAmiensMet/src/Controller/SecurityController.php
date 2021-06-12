<?php

namespace App\Controller;

use App\Form\UtilisateurInscriptionType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Utilisateur;
use App\Form\UtilisateurInscriptionType;

class SecurityController extends AbstractController
{
    /**
     * @Route("/inscription", name="security_registration")
     */
    public function registration()
    {
        $utilisateur = new Utilisateur();
        $form = $this->createForm(UtilisateurInscriptionType::class, $utilisateur);

        return $this->render('security/registration.html.twig',
        [
            'form' => $form->createView()
        ]);
    }
}
