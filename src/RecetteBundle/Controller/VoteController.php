<?php

namespace RecetteBundle\Controller;

use RecetteBundle\Entity\Vote;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class VoteController extends Controller
{
    public  function  addLikeAction($recette_id,$user_id,$v){
        $em = $this->getDoctrine()->getManager();
        if ($em->getRepository('RecetteBundle:Vote')->verif($user_id,$recette_id))
        {
            $vote=$em->getRepository('RecetteBundle:Vote')->findOneBy(array('recetteId' => $recette_id, 'userId' =>$user_id));
            if($vote->getVote()==1)
            {
                $voteTrouve = $em->getRepository("RecetteBundle:Vote")->findOneBy(array( 'userId' => $user_id , 'recetteId' => $recette_id));
                $em->remove($voteTrouve);
                $em->flush();
                $em->getRepository('RecetteBundle:Vote')->RemoveLikeToRecette($recette_id);
                return $this->redirectToRoute('AfficheFrontRecette');
            }else{
                $em->getRepository("RecetteBundle:Vote")->UpdateLike($user_id,$recette_id);
                $em->getRepository('RecetteBundle:Vote')->RemoveDisLikeToRecette($recette_id);
                $em->getRepository('RecetteBundle:Vote')->AddLikeToRecette($recette_id);

                return $this->redirectToRoute('AfficheFrontRecette');
            }
        }
        else {
            $vote = new Vote();
            $recette = $em->getRepository('RecetteBundle:Recette')->find($recette_id);
            $user = $em->getRepository('FrontBundle:User')->find($user_id);
            $vote->setRecetteId($recette);
            $vote->setUserId($user);
            $vote->setVote($v);
            $em->persist($vote);
            $em->flush();
            $em->getRepository('RecetteBundle:Vote')->AddLikeToRecette($recette_id);
            return $this->redirectToRoute('AfficheFrontRecette');
        }
    }
    public  function  addDislikeAction($recette_id,$user_id,$v){
        $em = $this->getDoctrine()->getManager();
        if ($em->getRepository('RecetteBundle:Vote')->verif($user_id,$recette_id))
        {
            $vote=$em->getRepository('RecetteBundle:Vote')->findOneBy(array('recetteId' => $recette_id, 'userId' =>$user_id));
            if($vote->getVote()==-1)
            {
                $em->getRepository('RecetteBundle:Vote')->RemoveDislikeToRecette($recette_id);
                $voteTrouve = $em->getRepository("RecetteBundle:Vote")->findOneBy(array( 'userId' => $user_id , 'recetteId' => $recette_id));
                $em->remove($voteTrouve);
                $em->flush();
                return $this->redirectToRoute('AfficheFrontRecette');
            }else{
                $em->getRepository("RecetteBundle:Vote")->UpdateDislike($user_id,$recette_id);
                $em->getRepository('RecetteBundle:Vote')->RemoveLikeToRecette($recette_id);
                $em->getRepository('RecetteBundle:Vote')->AddDisLikeToRecette($recette_id);
                return $this->redirectToRoute('AfficheFrontRecette');

            }
        }
        else {
            $vote = new Vote();
            $recette = $em->getRepository('RecetteBundle:Recette')->find($recette_id);
            $user = $em->getRepository('FrontBundle:User')->find($user_id);
            $em->getRepository('RecetteBundle:Vote')->AddDisLikeToRecette($recette_id);
            $vote->setRecetteId($recette);
            $vote->setUserId($user);
            $vote->setVote($v);
            $em->persist($vote);
            $em->flush();
            return $this->redirectToRoute('AfficheFrontRecette');
        }
    }
    public  function  addLikeAjaxAction(Request $request){

        $v=$request->get('v');
        $recette_id=$request->get('id');
        $user_id=$this->getUser();
        $em = $this->getDoctrine()->getManager();
        if ($em->getRepository('RecetteBundle:Vote')->verif($user_id,$recette_id))
        {
            $vote=$em->getRepository('RecetteBundle:Vote')->findOneBy(array('recetteId' => $recette_id, 'userId' =>$user_id));
            if($vote->getVote()==1)
            {
                $voteTrouve = $em->getRepository("RecetteBundle:Vote")->findOneBy(array( 'userId' => $user_id , 'recetteId' => $recette_id));
                $em->remove($voteTrouve);
                $em->flush();
                $em->getRepository('RecetteBundle:Vote')->RemoveLikeToRecette($recette_id);
                $a=$em->getRepository('RecetteBundle:Recette')->findOneBy(array('id'=>$recette_id))->getLikeCount();
                dump($a);
                return new JsonResponse($a);
            }else{
                $em->getRepository("RecetteBundle:Vote")->UpdateLike($user_id,$recette_id);
                $em->getRepository('RecetteBundle:Vote')->RemoveDisLikeToRecette($recette_id);
                $em->getRepository('RecetteBundle:Vote')->AddLikeToRecette($recette_id);
                $a=$em->getRepository('RecetteBundle:Recette')->findOneBy(array('id'=>$recette_id))->getLikeCount();
                dump($a);
                return new JsonResponse($a);
            }
        }
        else {
            $vote = new Vote();
            $recette = $em->getRepository('RecetteBundle:Recette')->find($recette_id);
            $user = $em->getRepository('FrontBundle:User')->find($user_id);
            $vote->setRecetteId($recette);
            $vote->setUserId($user);
            $vote->setVote($v);
            $em->persist($vote);
            $em->flush();
            $em->getRepository('RecetteBundle:Vote')->AddLikeToRecette($recette_id);
            $a=$em->getRepository('RecetteBundle:Recette')->findOneBy(array('id'=>$recette_id))->getLikeCount();
            dump($a);
            return new JsonResponse($a);
        }

    }


  /*  public function ifLikedOrDislikedAction(Request $request){
        $user_id=$request->get('user_id');
        $recette_id=$request->get('recette_id');
        $em = $this->getDoctrine()->getManager();
        if ($em->getRepository('RecetteBundle:Vote')->verif($user_id,$recette_id))
        {
            $vote=$em->getRepository('RecetteBundle:Vote')->verif($user_id,$recette_id);
            if ($vote.id==1)
            {
                return "is-liked";
            }
            else{
                return "is-disliked";
            }
        }
        else
        {
        }
    }*/
}
