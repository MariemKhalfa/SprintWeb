<?php

namespace CovoiturageBundle\Controller;

use CovoiturageBundle\Entity\Covoiturage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CovoiturageController extends Controller
{
    public function ajouterCovAction(Request $request)
    {
        $covoiturage= new Covoiturage();
        $em=$this->getDoctrine()->getManager();
        if($request->getMethod()=="POST")
        {
            $covoiturage->setDate();
            $d=$covoiturage->setLieuDep();
            $s=$covoiturage->setLieuDest();
            $covoiturage->setTitre($d.' vers '.$s);
            $covoiturage->setHeureDep();


            $user = $em->getRepository("FrontBundle:User")->findBy(id);
            $covoiturage->setCovoitureur($user);


            $em->persist($covoiturage);// persist mta3 insert
            $em->flush();// flush mta3 execution

            return $this->redirectToRoute('');

        }

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
