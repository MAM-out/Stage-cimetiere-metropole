<?php

namespace App\Controller;

use App\Entity\Usagers;
use App\Repository\UsagersRepository; 
use Doctrine\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Doctrine\ORM\EntityManagerInterface;


class UsagersController extends AbstractController
{
    /**
     * @Route("/usagers", name="usagers")
     */
    public function index(): Response
    {
        return $this->render('usagers/index.html.twig', [
            'controller_name' => 'UsagersController',
        ]);
    }


    /**
     * @Route("/usagers/creer-carte", name="creercarteusagers")
     */
    public function creer(Request $request)
    {
        dump($request);
     /*   , EntityManagerInterface $manager
     
     $usager = new Usager();
       $form = $this->createFormBuilder($usager)
                     ->add('nom_famille')
                     ->add('nom_usage')
                     ->add('prenom_1')
                     ->add('prenom_2')
                     ->add('date_naissance')
                     ->add('adresse_1')
                     ->add('adresse_2')
                     ->add('code_postal')
                     ->add('ville')
                     ->add('cim_1')
                     ->add('cim_2')
                     ->add('cim_3')
                     ->add('cim_4')
                     ->add('cim_5')
                     ->add('cim_6')
                     ->add('cim_7')
                     ->add('cim_8')
                     ->getForm();*/


        return $this->render('usagers/creer-carte.html.twig', [
            'controller_name' => 'UsagersController',
        ]);
    }

    /**
     * @Route("/usagers/afficher_usager", name="afficherficheusager")
     */
    public function afficher_usager()
    {
        $repo = $this->getDoctrine()->getRepository(Usagers::class);
       /* $usagers = $repo->findBy();*/

        return $this->render('usagers/afficher_usager.html.twig', [
            'controller_name' => 'UsagersController'
            /*'usagers' => $usagers*/,
        ]);
    }

}
