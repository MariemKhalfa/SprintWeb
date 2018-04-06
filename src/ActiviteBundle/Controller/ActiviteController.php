<?php

namespace ActiviteBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use ActiviteBundle\Entity\Activite;

class ActiviteController extends Controller
{


    /**
     * @Route("/activite/view", name="view_activite_route")
     */
    public function viewActiviteAction()
    {
        $activites=$this->getDoctrine()->getRepository('ActiviteBundle:Activite')->findAll();

        return $this->render('@Activite/pages/index.html.twig', ['activites'=>$activites]);
    }


    /**
     * @Route("/activite/create", name="create_activite_route")
     */
    public function createActiviteAction(Request $request)
    {

        $activite = new Activite();
        $form=$this->createFormBuilder($activite)
        ->add ('type',TextType::class,array('attr' => array('class'=>'form-control')))
        ->add('adresse',TextType::class,array('attr' => array('class'=>'form-control')))

        ->add('date', DateType::class, array('attr' => 'single_text',

            // adds a class that can be selected in JavaScript
            'attr' => ['class' => 'js-datepicker'],
        ))
        ->add('heure',TextType::class,array('attr' => array('class'=>'form-control')))
        ->add('agemin')

        ->add('save',SubmitType::Class,array('label'=>'Créer Activité', 'attr' =>array ('class'=>'btn btn-primary',
            'style'=>'margin-top:10px')))
        ->getForm() ;
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
                $type=$form['type']->getData();
                $adresse=$form['adresse']->getData();
                 $date=$form['date']->getData();
                $heure=$form['heure']->getData();
                $agemin=$form['agemin']->getData();


                $activite->setType($type);
                $activite->setAdresse($adresse);
                $activite->setDate($date);
                $activite->setHeure($heure);
                $activite->setAgeMin($agemin);

                $em =$this->getDoctrine()->getManager();
                $em->persist($activite);
                $em->flush();
                $this->addFlash('message','Activité enregistrée avec succès');
                return $this->redirectToRoute('view_activite_route');
        }



return $this->render("@Activite/pages/create.html.twig",['form' =>$form->createView()]);

    }


    /**
     * @Route("/activite/update/{id}", name="update_activite_route")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function updateActiviteAction(Request $request,$id)
    {
        $activite=$this->getDoctrine()->getRepository('ActiviteBundle:Activite')->find($id);
            $activite->setType($activite->getType());
            $activite->setAdresse($activite->getAdresse());
            $activite->setDate($activite->getDate());
            $activite->setAgemin($activite->getAgemin());
            $activite->setHeure($activite->getHeure());

        $form=$this->createFormBuilder($activite)
            ->add ('type',TextType::class,array('attr' => array('class'=>'form-control')))
            ->add('adresse',TextType::class,array('attr' => array('class'=>'form-control')))

            ->add('date', DateType::class, array('attr' => 'single_text',

                // adds a class that can be selected in JavaScript
                'attr' => ['class' => 'js-datepicker'],
            ))
            ->add('heure',TextType::class,array('attr' => array('class'=>'form-control')))
            ->add('agemin')

            ->add('save',SubmitType::Class,array('label'=>'Créer Activité', 'attr' =>array ('class'=>'btn btn-primary',
                'style'=>'margin-top:10px')))
            ->getForm() ;

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()) {
            $type = $form['type']->getData();
            $adresse = $form['adresse']->getData();
            $date = $form['date']->getData();
            $heure = $form['heure']->getData();
            $agemin = $form['agemin']->getData();

            $em = $this->getDoctrine()->getManager();
            $activite=$em->getRepository('ActiviteBundle:Activite')->find($id);


            $activite->setType($type);
            $activite->setAdresse($adresse);
            $activite->setDate($date);
            $activite->setHeure($heure);
            $activite->setAgeMin($agemin);

            $em->flush();
            $this->addFlash('message','Activité modifiée avec succès');
            return $this->redirectToRoute('view_activite_route');

        }


        return $this->render('@Activite/pages/update.html.twig', ['form'=>$form->createView()]) ;
    }


    /**
     * @Route("/activite/show/{id}", name="show_activite_route")
     */
    public function showActiviteAction(Request $request,$id)
    {
        $activite=$this->getDoctrine()->getRepository('ActiviteBundle:Activite')->find($id);
        return $this->render('pages/view.html.twig',['activite'=>$activite]) ;
    }


    /**
     * @Route("/activite/delete/{id}", name="delete_activite_route")
     */
    public function deleteActiviteAction( Request $request, $id )
    {
        $em=$this->getDoctrine()->getManager();
        $activite=$em->getRepository('ActiviteBundle:Activite')->find($id);
        $em->remove($activite);

        $em->flush();
        $this->addFlash('message','Activité supprimée avec succès');

        return $this->redirectToRoute('view_activite_route');
    }

    public function afficheBackAction()
    {
        $em = $this->getDoctrine();
        $Activite = $em->getRepository("ActiviteBundle:Activite")->findAll();
        return $this->render("ActiviteBundle:pages:AfficherBackActivite.html.twig", array("Activite" => $Activite));
    }
}
