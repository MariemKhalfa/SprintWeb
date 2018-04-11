<?php

namespace ELearningBundle\Controller;

use ELearningBundle\Form\ModificationEnseignant;
use FrontBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ELearningBundle:Default:index.html.twig');
    }

    public function afficheAction()
    {
        $em = $this->getDoctrine();
        $Enseignant = $em->getRepository("FrontBundle:User")->findRoleEnseignant();
        return $this->render("ELearningBundle:Enseignant:AfficherEnseignant.html.twig", array("Enseignant" => $Enseignant));
    }

    public function afficheBackAction()
    {
        $em = $this->getDoctrine();
        $Enseignant = $em->getRepository("FrontBundle:User")->findRoleEnseignant();
        return $this->render("ELearningBundle:Enseignant:AfficherBackEnseignant.html.twig", array("Enseignant" => $Enseignant));
    }

    public function suppAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $Enseignant = $em->getRepository("FrontBundle:User")->find($id);
        $em->remove($Enseignant);
        $em->flush();

        return $this->redirectToRoute('e_learning_afficherBackEnseignant');
    }

    public function modifAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $Enseignant = $em->getRepository("FrontBundle:User")->find($id);
        $Form = $this->createForm(ModificationEnseignant::class, $Enseignant);

        $Form->handleRequest($request);
        if ($Form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Enseignant);
            $em->flush();
            return $this->redirectToRoute('e_learning_afficherBackEnseignant');
        }
        return $this->render('ELearningBundle:Enseignant:ModificationEnseignant.html.twig', array('form' => $Form->createView(),'id'=>$id));
    }

    function AjoutAction(Request $request)
    {
        $Enseignant = new User();

        if ($request->isMethod('POST')) {

            $Enseignant->setUsername($request->get('username'));
            $Enseignant->setCIN($request->get('cin'));
            $Enseignant->setEmail($request->get('email'));
            $Enseignant->setTelephone($request->get('tel'));
            $Enseignant->setPlainPassword($request->get('mdp'));
            $Enseignant->setSexe($request->get('sexe'));
            $Enseignant->setNom($request->get('nom'));
            $Enseignant->setPrenom($request->get('prenom'));
            $Enseignant->addRole('ROLE_ENSEIGNANT');
            $Enseignant->setRue($request->get('rue'));
            $Enseignant->setVille($request->get('ville'));
            $Enseignant->setDescription($request->get('description'));
            $Enseignant->setSpecialite($request->get('specialite'));
            $Enseignant->setEnabled(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Enseignant);
            $em->flush();
            return $this->redirectToRoute('e_learning_afficherBackEnseignant');

        }
        return $this->render('@ELearning/Enseignant/ajoutEnseignant.html.twig');
    }
}
