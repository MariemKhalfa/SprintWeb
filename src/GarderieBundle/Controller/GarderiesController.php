<?php

namespace GarderieBundle\Controller;

use GarderieBundle\Entity\Garderies;
use GarderieBundle\Form\GarderiesType;
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
           // return  $this->redirectToRoute("garderie1_afficher");
        }
        return $this->render('GarderieBundle:Back:ajoutGarderie.html.twig',array('form'=>$Form->createView()));
    }

}
