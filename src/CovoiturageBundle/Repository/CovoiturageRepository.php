<?php

namespace CovoiturageBundle\Repository;

use Doctrine\ORM\EntityRepository;
/**
 * CovoiturageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CovoiturageRepository extends EntityRepository
{
    public function findCovoiturages()
    {
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM CovoiturageBundle:Covoiturage c WHERE c.date > CURRENT_DATE()");
        return $result = $query->getResult();
    }
    public function MesCovoiturages($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM CovoiturageBundle:Covoiturage c WHERE c.covoitureur=:i AND c.date > CURRENT_DATE()")
            ->setParameter('i', $id);

        return $result = $query->getResult();
    }

    public function CovoituragesPotentiels($id,$ad)
    {
        $query = $this->getEntityManager()
            ->createQuery(" SELECT c FROM CovoiturageBundle:Covoiturage c WHERE c.lieuDep LIKE :a and c.covoitureur <>:i and c.date>CURRENT_DATE() ")
            ->setParameter('a', $ad)
            ->setParameter('i', $id);

        return $result = $query->getResult();
    }

    public function MesAnciensCovoiturages($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM CovoiturageBundle:Covoiturage c WHERE c.covoitureur=:i AND c.date < CURRENT_DATE()")
            ->setParameter('i', $id);

        return $result = $query->getResult();
    }
    public function AutresCovoiturages($id)
    {
        $query = $this->getEntityManager()
            ->createQuery("SELECT c FROM CovoiturageBundle:Covoiturage c WHERE c.covoitureur<>:i AND c.date > CURRENT_DATE()")
            ->setParameter('i', $id);

        return $result = $query->getResult();
    }

    function rechercheAvancee($keywords)
    {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $results = null;

        foreach (str_word_count($keywords, 1) as $word) {
            $qb->select(array('c'))
                ->from('CovoiturageBundle:Covoiturage', 'c')
                ->where($qb->expr()->orX(
                    $qb->expr()->like('c.date', '?1'),
                    $qb->expr()->like('c.heureDep', '?1'),
                    $qb->expr()->like('c.lieuDep', '?1'),
                    $qb->expr()->like('c.lieuDest', '?1'),
                    $qb->expr()->like('c.nbPlaces', '?1')
                ))
                ->setParameter('1', '%'.$word.'%');

            if ($results == null) {
                $results = $qb->getQuery()->getResult();
            } else {
                $results = new ArrayCollection(
                    array_merge(
                        $results,
                        $qb->getQuery()->getResult()
                    )
                );
            }
        }
        return $results;
    }
}
