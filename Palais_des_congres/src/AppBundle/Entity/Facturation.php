<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facturation
 *
 * @ORM\Table(name="facturation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\FacturationRepository")
 */
class Facturation
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
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Client")
     */
    private $client;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Salle")
     */
    private $salle;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Reservation")
     */
    private $reservation;

    /**
     * @var int
     *
     * @ORM\Column(name="nbHeure", type="integer")
     */
    private $nbHeure;

    /**
     * @var int
     *
     * @ORM\Column(name="nbParticipantReel", type="integer")
     */
    private $nbParticipantReel;

    /**
     * @var int
     *
     * @ORM\Column(name="VAS", type="integer")
     */
    private $vAS;

    /**
     * @var int
     *
     * @ORM\Column(name="location", type="integer")
     */
    private $location;

    /**
     * @var int
     *
     * @ORM\Column(name="nettoyage", type="integer")
     */
    private $nettoyage;


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
     * Set client
     *
     * @param integer $client
     *
     * @return Facturation
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return int
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set salle
     *
     * @param integer $idSalle
     *
     * @return Facturation
     */
    public function setSalle($salle)
    {
        $this->salle = $salle;

        return $this;
    }

    /**
     * Get salle
     *
     * @return int
     */
    public function getSalle()
    {
        return $this->salle;
    }

    /**
     * Set reservation
     *
     * @param integer $reservation
     *
     * @return Facturation
     */
    public function setReservation($reservation)
    {
        $this->reservation = $reservation;

        return $this;
    }

    /**
     * Get reservation
     *
     * @return int
     */
    public function getReservation()
    {
        return $this->reservation;
    }

    /**
     * Set nbHeure
     *
     * @param integer $nbHeure
     *
     * @return Facturation
     */
    public function setNbHeure($nbHeure)
    {
        $this->nbHeure = $nbHeure;

        return $this;
    }

    /**
     * Get nbHeure
     *
     * @return int
     */
    public function getNbHeure()
    {
        return $this->nbHeure;
    }

    /**
     * Set nbParticipantReel
     *
     * @param integer $nbParticipantReel
     *
     * @return Facturation
     */
    public function setNbParticipantReel($nbParticipantReel)
    {
        $this->nbParticipantReel = $nbParticipantReel;

        return $this;
    }

    /**
     * Get nbParticipantReel
     *
     * @return int
     */
    public function getNbParticipantReel()
    {
        return $this->nbParticipantReel;
    }

    /**
     * Set vAS
     *
     * @param integer $vAS
     *
     * @return Facturation
     */
    public function setVAS($vAS)
    {
        $this->vAS = $vAS;

        return $this;
    }

    /**
     * Get vAS
     *
     * @return int
     */
    public function getVAS()
    {
        return $this->vAS;
    }

    /**
     * Set location
     *
     * @param integer $location
     *
     * @return Facturation
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return int
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set nettoyage
     *
     * @param integer $nettoyage
     *
     * @return Facturation
     */
    public function setNettoyage($nettoyage)
    {
        $this->nettoyage = $nettoyage;

        return $this;
    }

    /**
     * Get nettoyage
     *
     * @return int
     */
    public function getNettoyage()
    {
        return $this->nettoyage;
    }
}

