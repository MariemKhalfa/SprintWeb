<?php

namespace MedecinBundle\Controller;

use MedecinBundle\Entity\Medecins;
use MedecinBundle\Form\MedecinsType;
use MedecinBundle\Form\MedecinsUpdateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class MedecinController extends Controller
{
    function ajoutAction(Request $request){

        $medecin=new Medecins();

        $Form=$this->createForm(MedecinsType::class,$medecin);
        $Form->handleRequest($request);
        if($Form->isValid()){
            echo 'jj';
            /**
             * Get image
             * @var UploadedFile $file
             */
            $file=$medecin->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'), $fileName);
            $medecin->setImage($fileName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($medecin);
            $em->flush();
            //    return  $this->redirectToRoute("AffichageModele");
        }
        return $this->render('MedecinBundle:Back:ajoutMedecin.html.twig',array('form'=>$Form->createView()));
    }
    function listAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        if ($request->query->getAlnum('filter')) {
            $queryBuilder = $em->getRepository('MedecinBundle:Medecins')->createQueryBuilder('bp1');
            $queryBuilder->where('bp1.nom like :nom')->setParameter('nom', '%' . $request->query->getAlnum('filter') . '%');
            $query=$queryBuilder->getQuery();}

        else{   //$modeles=$em->getRepository("Garderie1Bundle:Garderies")->findAll();
            $dql="Select m from MedecinBundle:Medecins m";
            $query=$em->createQuery($dql);}
        $paginator  = $this->get('knp_paginator');

        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',2)
        );
        return $this->render('MedecinBundle:Back:listesMedecins.html.twig',array("medecin"=>$result));
    }
    function DeleteAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $medecin=$em->getRepository('MedecinBundle:Medecins')->find($request->get('id'));
        $em->remove($medecin);
        $em->flush();
        return $this->redirectToRoute("medecin_liste");

    }
    function UpdateAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $medecin=$em->getRepository('MedecinBundle:Medecins')->find($request->get('id'));
        echo $medecin->getNom();
        $Form=$this->createForm(MedecinsUpdateType::class,$medecin);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $file=$medecin->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'), $fileName);
            $medecin->setImage($fileName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($medecin);
            $em->flush();
            return $this->redirectToRoute('medecin_liste');
        }
        return $this->render('MedecinBundle:Back:ModifierMedecin.html.twig',array('form'=>$Form->createView()));


    }

}
