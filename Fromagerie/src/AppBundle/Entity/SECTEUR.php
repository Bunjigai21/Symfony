<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class SECTEUR
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $libelle;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $appartenir;

    /**
     * @ORM\OneToMany(targetEntity="RAMASSEUR", mappedBy="sECTEUR")
     */
    private $rAMASSEUR;

    /**
     * @ORM\ManyToOne(targetEntity="PRODUCTEUR", inversedBy="secteur")
     * @ORM\JoinColumn(name="producteur_id", referencedColumnName="id")
     */
    private $pRODUCTEUR;
}