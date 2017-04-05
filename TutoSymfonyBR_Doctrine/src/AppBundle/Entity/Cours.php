<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cours
 *
 * @ORM\Table(name="cours")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CoursRepository")
 */
class Cours
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
     * @ORM\Column(name="libelleCours", type="string", length=40)
     */
    private $libelleCours;

    /**
     * @var int
     *
     * @ORM\Column(name="nbJours", type="integer")
     */
    private $nbJours;

    /**
     * @ORM\ManyToOne(targetEntity="\AppBundle\Entity\Cours")
     * @ORM\JoinColumn(name="idCours", referencedColumnName="id")
     */
    private $cours;


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
     * Set libelleCours
     *
     * @param string $libelleCours
     *
     * @return Cours
     */
    public function setLibelleCours($libelleCours)
    {
        $this->libelleCours = $libelleCours;

        return $this;
    }

    /**
     * Get libelleCours
     *
     * @return string
     */
    public function getLibelleCours()
    {
        return $this->libelleCours;
    }

    /**
     * Set nbJours
     *
     * @param integer $nbJours
     *
     * @return Cours
     */
    public function setNbJours($nbJours)
    {
        $this->nbJours = $nbJours;

        return $this;
    }

    /**
     * Get nbJours
     *
     * @return int
     */
    public function getNbJours()
    {
        return $this->nbJours;
    }
}

