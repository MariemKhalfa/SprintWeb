<?php

namespace CovoiturageBundle\Controller;

use CovoiturageBundle\Entity\Covoiturage;
use CovoiturageBundle\Form\CovoiturageType;
use FrontBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CovoiturageController extends Controller
{
    public function ajouterCovAction(Request $request)
    {
        $cov = new Covoiturage();
        $form = $this->createForm(CovoiturageType::class, $cov);
        $form->handleRequest($request);
        if ($form->isValid()) { // suite au clic sur le bouton
            $em = $this->getDoctrine()->getManager();

            $d = $cov->getLieuDep();
            $s = $cov->getLieuDest();
            $cov->setTitre($d . ' vers ' . $s);
            $user = $this->container->get('security.token_storage')->getToken()->getUser(); // $user is filled with the logged user

            $cov->setCovoitureur($user);
            $voiture = $em->getRepository("CovoiturageBundle:Voiture")->findOneBy(array('proprio' => $user->getId()));
            $cov->setVoiture($voiture);

            $em->persist($cov);
            $em->flush();
            return $this->redirectToRoute("lister_mes_cov");
        }
        return $this->render('CovoiturageBundle:Covoiturage:ajouter_cov.html.twig', array(
            "form" => $form->createView()
        ));
    }

    public function modifierCovAction()
    {
        $covoiturage = new Covoiturage();
        $em = $this->getDoctrine()->getManager();
        $Form = $this->createForm(CovoiturageType::class, $covoiturage);
        return $this->render('CovoiturageBundle:Covoiturage:modifier_cov.html.twig', array('form' => $Form->createView()
        ));
    }

    public function listerMesCovAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $covs = $em->getRepository("CovoiturageBundle:Covoiturage")->MesCovoiturages($user->getId());
        return $this->render('CovoiturageBundle:Covoiturage:lister_mes_cov.html.twig', array("covs" => $covs));
    }

    public function listerDesCovAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $covs = $em->getRepository("CovoiturageBundle:Covoiturage")->AutresCovoiturages($user->getId());
        return $this->render('CovoiturageBundle:Covoiturage:lister_des_cov.html.twig', array("covs" => $covs));
    }
    public function detailsCovAction(Request $request,$id)
    {
        $em=$this->getDoctrine()->getManager();
       $cov=$em->getRepository('CovoiturageBundle:Covoiturage')->findBy(array("id"=>$id));
     /*   $cov=$em->getRepository('CovoiturageBundle:Covoiturage')->find($request->get($id));*/
        return $this->render('CovoiturageBundle:Covoiturage:details_cov.html.twig',array(
            'cov'=>$cov,
        ));


     /*   return $this->render('CovoiturageBundle:Covoiturage:details_cov.html.twig', array(
            'co'=>$cov
        ));*/

    }
    public function reserverCovAction($id)
    {
        return $this->render('CovoiturageBundle:Covoiturage:reserver_cov.html.twig', array(// ...
        ));
    }

    public function historiqueCovAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $covs = $em->getRepository("CovoiturageBundle:Covoiturage")->MesAnciensCovoiturages($user->getId());

        return $this->render('CovoiturageBundle:Covoiturage:historique_cov.html.twig', array(
            "covs" => $covs
        ));
    }

    public function chercherCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:chercher_cov.html.twig', array(// ...
        ));
    }

    public function matchingCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:matching_cov.html.twig', array(// ...
        ));
    }

    public function distanceCovAction()
    {
        return $this->render('CovoiturageBundle:Covoiturage:distance_cov.html.twig', array(// ...
        ));
    }

}
