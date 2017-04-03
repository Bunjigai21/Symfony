<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reservation
 *
 * @ORM\Table(name="reservation")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ReservationRepository")
 */
class Reservation
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
     *
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Client")
     *
     *
     */
    private $client;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReservation", type="date")
     */
    private $dateReservation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFin", type="date")
     */
    private $dateFin;

    /**
     * @var string
     *
     * @ORM\Column(name="nomManif", type="string", length=255)
     */
    private $nomManif;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireSouhaiteDebut", type="time")
     */
    private $horaireSouhaiteDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="horaireSouhaiteFin", type="time")
     */
    private $horaireSouhaiteFin;

    /**
     * @var int
     *
     * @ORM\Column(name="nbParticipantAttendus", type="integer")
     */
    private $nbParticipantAttendus;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255)
     */
    private $etat;

    /**
     * @var int
     *
     * @ORM\Column(name="arrhes", type="integer")
     */
    private $arrhes;


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
     * @return Reservation
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
     * Set dateReservation
     *
     * @param \DateTime $dateReservation
     *
     * @return Reservation
     */
    public function setDateReservation($dateReservation)
    {
        $this->dateReservation = $dateReservation;

        return $this;
    }

    /**
     * Get dateReservation
     *
     * @return \DateTime
     */
    public function getDateReservation()
    {
        return $this->dateReservation;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Reservation
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Reservation
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set nomManif
     *
     * @param string $nomManif
     *
     * @return Reservation
     */
    public function setNomManif($nomManif)
    {
        $this->nomManif = $nomManif;

        return $this;
    }

    /**
     * Get nomManif
     *
     * @return string
     */
    public function getNomManif()
    {
        return $this->nomManif;
    }

    /**
     * Set horaireSouhaiteDebut
     *
     * @param \DateTime $horaireSouhaiteDebut
     *
     * @return Reservation
     */
    public function setHoraireSouhaiteDebut($horaireSouhaiteDebut)
    {
        $this->horaireSouhaiteDebut = $horaireSouhaiteDebut;

        return $this;
    }

    /**
     * Get horaireSouhaiteDebut
     *
     * @return \DateTime
     */
    public function getHoraireSouhaiteDebut()
    {
        return $this->horaireSouhaiteDebut;
    }

    /**
     * Set horaireSouhaiteFin
     *
     * @param \DateTime $horaireSouhaiteFin
     *
     * @return Reservation
     */
    public function setHoraireSouhaiteFin($horaireSouhaiteFin)
    {
        $this->horaireSouhaiteFin = $horaireSouhaiteFin;

        return $this;
    }

    /**
     * Get horaireSouhaiteFin
     *
     * @return \DateTime
     */
    public function getHoraireSouhaiteFin()
    {
        return $this->horaireSouhaiteFin;
    }

    /**
     * Set nbParticipantAttendus
     *
     * @param integer $nbParticipantAttendus
     *
     * @return Reservation
     */
    public function setNbParticipantAttendus($nbParticipantAttendus)
    {
        $this->nbParticipantAttendus = $nbParticipantAttendus;

        return $this;
    }

    /**
     * Get nbParticipantAttendus
     *
     * @return int
     */
    public function getNbParticipantAttendus()
    {
        return $this->nbParticipantAttendus;
    }

    /**
     * Set etat
     *
     * @param string $etat
     *
     * @return Reservation
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return string
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set arrhes
     *
     * @param integer $arrhes
     *
     * @return Reservation
     */
    public function setArrhes($arrhes)
    {
        $this->arrhes = $arrhes;

        return $this;
    }

    /**
     * Get arrhes
     *
     * @return int
     */
    public function getArrhes()
    {
        return $this->arrhes;
    }
}

