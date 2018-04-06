<?php

namespace CovoiturageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CovoiturageController extends Controller
{
    public function ajouterCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:ajouter_cov.html.twig', array(
            // ...
        ));
    }

    public function modifierCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:modifier_cov.html.twig', array(
            // ...
        ));
    }

    public function listerMesCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:lister_mes_cov.html.twig', array(
            // ...
        ));
    }

    public function listerDesCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:lister_des_cov.html.twig', array(
            // ...
        ));
    }

    public function historiqueCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:historique_cov.html.twig', array(
            // ...
        ));
    }

    public function chercherCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:chercher_cov.html.twig', array(
            // ...
        ));
    }

    public function matchingCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:matching_cov.html.twig', array(
            // ...
        ));
    }

    public function distanceCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:distance_cov.html.twig', array(
            // ...
        ));
    }

}
