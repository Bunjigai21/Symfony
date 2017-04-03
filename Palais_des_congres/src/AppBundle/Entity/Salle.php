<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 *
 * @ORM\Table(name="salle")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SalleRepository")
 */
class Salle
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var int
     *
     * @ORM\Column(name="capacité", type="integer")
     */
    private $capacité;

    /**
     * @var int
     *
     * @ORM\Column(name="tempsNettoyage", type="integer")
     */
    private $tempsNettoyage;

    /**
     * @var int
     *
     * @ORM\Column(name="tauxLocation", type="integer")
     */
    private $tauxLocation;

    /**
     * @var int
     *
     * @ORM\Column(name="tauxVAS", type="integer")
     */
    private $tauxVAS;

    /**
     * @var int
     *
     * @ORM\Column(name="tauxNettoyage", type="integer")
     */
    private $tauxNettoyage;


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
     * Set idSalle
     *
     * @param integer $idSalle
     *
     * @return Salle
     */
    public function setIdSalle($idSalle)
    {
        $this->idSalle = $idSalle;

        return $this;
    }

    /**
     * Get idSalle
     *
     * @return int
     */
    public function getIdSalle()
    {
        return $this->idSalle;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Salle
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set capacité
     *
     * @param integer $capacité
     *
     * @return Salle
     */
    public function setCapacité($capacité)
    {
        $this->capacité = $capacité;

        return $this;
    }

    /**
     * Get capacité
     *
     * @return int
     */
    public function getCapacité()
    {
        return $this->capacité;
    }

    /**
     * Set tempsNettoyage
     *
     * @param integer $tempsNettoyage
     *
     * @return Salle
     */
    public function setTempsNettoyage($tempsNettoyage)
    {
        $this->tempsNettoyage = $tempsNettoyage;

        return $this;
    }

    /**
     * Get tempsNettoyage
     *
     * @return int
     */
    public function getTempsNettoyage()
    {
        return $this->tempsNettoyage;
    }

    /**
     * Set tauxLocation
     *
     * @param integer $tauxLocation
     *
     * @return Salle
     */
    public function setTauxLocation($tauxLocation)
    {
        $this->tauxLocation = $tauxLocation;

        return $this;
    }

    /**
     * Get tauxLocation
     *
     * @return int
     */
    public function getTauxLocation()
    {
        return $this->tauxLocation;
    }

    /**
     * Set tauxVAS
     *
     * @param integer $tauxVAS
     *
     * @return Salle
     */
    public function setTauxVAS($tauxVAS)
    {
        $this->tauxVAS = $tauxVAS;

        return $this;
    }

    /**
     * Get tauxVAS
     *
     * @return int
     */
    public function getTauxVAS()
    {
        return $this->tauxVAS;
    }

    /**
     * Set tauxNettoyage
     *
     * @param integer $tauxNettoyage
     *
     * @return Salle
     */
    public function setTauxNettoyage($tauxNettoyage)
    {
        $this->tauxNettoyage = $tauxNettoyage;

        return $this;
    }

    /**
     * Get tauxNettoyage
     *
     * @return int
     */
    public function getTauxNettoyage()
    {
        return $this->tauxNettoyage;
    }
}

