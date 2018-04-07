<?php

namespace BabysittingBundle\Controller;

use BabysittingBundle\Entity\Babysitting;
use BabysittingBundle\Form\BabysittingType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BabysittingController extends Controller
{
    public function ajouterBabysittingAction(Request $request)
    {
        $baby = new Babysitting();
        $form = $this->createForm(BabysittingType::class, $baby);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $user=$this->container->get('security.token_storage')->getToken()->getUser();
            $baby->setBabysitteur($user);
            $em->persist($baby);
            $em->flush();
            return $this->redirectToRoute("lister_mes_babysittings");

        }
        return $this->render('BabysittingBundle:Babysitting:ajouter_babysitting.html.twig', array(
            "form" => $form->createView()
        ));
    }

    public function modifierBabysittingAction()
    {
        return $this->render('BabysittingBundle:Babysitting:modifier_babysitting.html.twig', array(
            // ...
        ));
    }

    public function listerMesBabysittingsAction()
    {
        return $this->render('BabysittingBundle:Babysitting:lister_mes_babysittings.html.twig', array(
            // ...
        ));
    }

    public function listerDesBabysittingsAction()
    {
        return $this->render('BabysittingBundle:Babysitting:lister_des_babysittings.html.twig', array(
            // ...
        ));
    }

    public function historiqueBabysittingAction()
    {
        return $this->render('BabysittingBundle:Babysitting:historique_babysitting.html.twig', array(
            // ...
        ));
    }

    public function chercherBabysittingAction()
    {
        return $this->render('BabysittingBundle:Babysitting:chercher_babysitting.html.twig', array(
            // ...
        ));
    }

    public function distanceBabysittingAction()
    {
        return $this->render('BabysittingBundle:Babysitting:distance_babysitting.html.twig', array(
            // ...
        ));
    }

}
