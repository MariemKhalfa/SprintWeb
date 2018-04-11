<?php

namespace RecetteBundle\Controller;

use RecetteBundle\Entity\Recette;
use RecetteBundle\Form\RecetteType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('RecetteBundle:Default:index.html.twig');
    }
    public function listAction()
    {
        $em=$this->getDoctrine();
        $Recette=$em->getRepository("RecetteBundle:Recette")->findAll();
        return $this->render('RecetteBundle:Recette:list.html.twig',array("Recette"=>$Recette));
    }
    public function listFrontAction()
    {
        $em=$this->getDoctrine();
        $Recette=$em->getRepository("RecetteBundle:Recette")->findAll();
        $Vote=$em->getRepository('RecetteBundle:Vote')->findAll();
        if ($Vote==null)
        {
            return $this->render('RecetteBundle:Recette:listFrontWithoutVote.html.twig',array("Recette"=>$Recette));
        }
        return $this->render('RecetteBundle:Recette:listFront.html.twig',array("Recette"=>$Recette,"Vote"=>$Vote));
    }
    public function listOneAction(Request $request)
    {
        $id=$request->get('id');
        $em=$this->getDoctrine();
        $Recette=$em->getRepository("RecetteBundle:Recette")->find($id);
        return $this->render('RecetteBundle:Recette:DetailRecette.html.twig',array("Recette"=>$Recette));
    }

    public function ajoutAction(Request $request) {
        $Recette = new Recette();
        $Form = $this->createForm(RecetteType::class,$Recette);
        $Form->handleRequest($request);
        if($Form->isSubmitted()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Recette);
            $em->flush();
            return $this->redirectToRoute('AfficheRecette');
        }
        return $this->render('RecetteBundle:Recette:ajout.html.twig',array('form'=>$Form->createView()));
    }

    public function suppAction(Request $request) {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $Recette = $em->getRepository("RecetteBundle:Recette")->find($id);
        $em->remove($Recette);
        $em->flush();

        return $this->redirectToRoute('AfficheRecette');
    }

    public function modifAction(Request $request) {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $Recette = $em->getRepository("RecetteBundle:Recette")->find($id);
        $Form = $this->createForm(RecetteType::class,$Recette);

        $Form->handleRequest($request);
        if($Form->isSubmitted() ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Recette);
            $em->flush();
            return $this->redirectToRoute('AfficheRecette');
        }
        return $this->render('RecetteBundle:Recette:modif.html.twig',array('form'=>$Form->createView(),'R' =>$Recette ));
    }

    public function rechercheAction(Request $request){
        $Recette = new Recette();
        $em = $this->getDoctrine();
        $Form = $this->createForm(rechercheRecetteForm::class,$Recette);
        $Form->handleRequest($request);

        if($Form->isSubmitted()) {
            $Recettes = $em->getRepository("RecetteBundle:Recette")
                ->findBy(array('titre'=>$Recette->getTitre()));
            //return $this->render('EspritParcBundle:Modele:list.html.twig',array("modeles"=>$modeles));

        }
        else {
            $Recettes = $em->getRepository("RecetteBundle:Recette")->findAll();
            //return $this->render('EspritParcBundle:Modele:list.html.twig',array("modeles"=>$modeles));

        }
        return $this->render('@Recette/Recette/list.html.twig',array("form"=>$Form->createView(),"Recette"=>$Recettes));
    }


}
