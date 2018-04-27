<?php

namespace RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vote
 *
 * @ORM\Table(name="voteLike")
 * @ORM\Entity(repositoryClass="RecetteBundle\Repository\VoteRepository")
 */
class Vote
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="RecetteBundle\Entity\Recette")
     * @ORM\JoinColumn(name="recette_id",referencedColumnName="id")
     */
    private $recetteId;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="FrontBundle\Entity\User")
     * @ORM\JoinColumn(name="user_id",referencedColumnName="id")
     */
    private $userId;

    /**
     * @var int
     *
     * @ORM\Column(name="vote", type="integer")
     */
    private $vote;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set recetteId
     *
     * @param integer $recetteId
     *
     * @return Vote
     */
    public function setRecetteId($recetteId)
    {
        $this->recetteId = $recetteId;

        return $this;
    }

    /**
     * Get recetteId
     *
     * @return int
     */
    public function getRecetteId()
    {
        return $this->recetteId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Vote
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set vote
     *
     * @param integer $vote
     *
     * @return Vote
     */
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get vote
     *
     * @return int
     */
    public function getVote()
    {
        return $this->vote;
    }
}

