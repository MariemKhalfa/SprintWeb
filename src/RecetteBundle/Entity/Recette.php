<?php

namespace RecetteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Recette
 *
 * @ORM\Table(name="recette")
 * @ORM\Entity(repositoryClass="RecetteBundle\Repository\RecetteRepository")
 */
class Recette
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
     * @var string
     *
     * @ORM\Column(name="video", type="string", length=700)
     */
    private $video;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=700)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;


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
     * Set video
     *
     * @param string $video
     *
     * @return Recette
     */
    public function setVideo($video)
    {
        $this->video = $video;

        return $this;
    }

    /**
     * Get video
     *
     * @return string
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Recette
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Recette
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }
}

