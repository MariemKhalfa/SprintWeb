<?php

namespace BabysittingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BabysittingController extends Controller
{
    public function ajouterBabysittingAction()
    {
        return $this->render('BabysittingBundle:Babysitting:ajouter_babysitting.html.twig', array(
            // ...
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
