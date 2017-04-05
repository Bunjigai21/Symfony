<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Seminaire
 *
 * @ORM\Table(name="seminaire")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SeminaireRepository")
 */
class Seminaire
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutSem", type="date")
     */
    private $dateDebutSem;

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
     * Set dateDebutSem
     *
     * @param \DateTime $dateDebutSem
     *
     * @return Seminaire
     */
    public function setDateDebutSem($dateDebutSem)
    {
        $this->dateDebutSem = $dateDebutSem;

        return $this;
    }

    /**
     * Get dateDebutSem
     *
     * @return \DateTime
     */
    public function getDateDebutSem()
    {
        return $this->dateDebutSem;
    }

    /**
     * Set cours
     *
     * @param \AppBundle\Entity\Cours $cours
     *
     * @return Seminaire
     */
    public function setCours(\AppBundle\Entity\Cours $cours = null)
    {
        $this->cours = $cours;

        return $this;
    }

    /**
     * Get cours
     *
     * @return \AppBundle\Entity\Cours
     */
    public function getCours()
    {
        return $this->cours;
    }
}
