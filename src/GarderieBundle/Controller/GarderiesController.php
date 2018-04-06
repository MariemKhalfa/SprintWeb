<?php

namespace GarderieBundle\Controller;

use GarderieBundle\Entity\Garderies;
use GarderieBundle\Form\GarderiesType;
use GarderieBundle\Form\GarderiesUpdateType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class GarderiesController extends Controller
{
    function ajoutAction(Request $request){


        $garderie=new Garderies();
        $garderie->setEtat("No");
        $garderie->setLatitude(35);
        $garderie->setTelephone($this->getUser()->getId());
        $garderie->setLongitude(10);
        $garderie->setRating(0);
        $Form=$this->createForm(GarderiesType::class,$garderie);
        $Form->handleRequest($request);
        if($Form->isValid()){
            /**
             * Get image
             * @var UploadedFile $file
             */

            $file=$garderie->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'), $fileName);
            $garderie->setImage($fileName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($garderie);
            $em->flush();
           return  $this->redirectToRoute("garderie_liste");
        }
        return $this->render('GarderieBundle:Back:ajoutGarderie.html.twig',array('form'=>$Form->createView()));
    }
    function listAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        if ($request->query->getAlnum('filter')) {
            $queryBuilder = $em->getRepository('GarderieBundle:Garderies')->createQueryBuilder('bp1');
            $queryBuilder->where('bp1.nom like :nom')->setParameter('nom', '%' . $request->query->getAlnum('filter') . '%');
            $query=$queryBuilder->getQuery();}

        else{   //$modeles=$em->getRepository("Garderie1Bundle:Garderies")->findAll();
            $dql="Select m from GarderieBundle:Garderies m";
            $query=$em->createQuery($dql);}
        $paginator  = $this->get('knp_paginator');

        $result = $paginator->paginate(
            $query,
            $request->query->getInt('page',1),
            $request->query->getInt('limit',2)
        );
        return $this->render('GarderieBundle:Back:listeGarderies.html.twig',array("garderie"=>$result));
    }
    function UpdateAction(Request $request){
        $em=$this->getDoctrine()->getManager();
        $garderie=$em->getRepository('GarderieBundle:Garderies')->find($request->get('id'));

        $Form=$this->createForm(GarderiesUpdateType::class,$garderie);
        $Form->handleRequest($request);
        if($Form->isValid()){
            $file=$garderie->getImage();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('image_directory'), $fileName);
            $garderie->setImage($fileName);
            $em=$this->getDoctrine()->getManager();
            $em->persist($garderie);
            $em->flush();
            return $this->redirectToRoute('garderie_liste');
        }
        return $this->render('GarderieBundle:Back:ModifierGarderie.html.twig',array('form'=>$Form->createView()));


    }

}
