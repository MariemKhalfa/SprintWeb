<?php
/**
 * Created by PhpStorm.
 * User: botbot
 * Date: 06/04/2018
 * Time: 17:46
 */

namespace GarderieBundle\Repository;


class GarderieRepository extends \Doctrine\ORM\EntityRepository
{
    public function RemoveVote($id)
    {

        $query=$this->getEntityManager()->createQuery("Delete from GarderieBundle:Vote v where v.idgarderie =:id")->setParameter('id',$id);
        return $query->getResult();
    }
    public function Demande($id)
    {

        $query=$this->getEntityManager()->createQuery("Select g from GarderieBundle:Garderie g where g.idgarderie =:id")->setParameter('id',$id);
        return $query->getResult();
    }
    public function Update($k,$serie)
    {

        $query=$this->getEntityManager()->createQuery("Update Garderie1Bundle:Garderies g set g.rating=g.rating+:k 
where g.id =:serie")->setParameter('serie',$serie)->setParameter('k',$k);
        return $query->getResult();
    }
}