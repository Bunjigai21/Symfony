<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RAMASSEUR
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse_rue_1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $adresse_rue_2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $ville;

    /**
     * @ORM\OneToMany(targetEntity="RAMASSAGE", mappedBy="rAMASSEUR")
     */
    private $rAMASSAGE;

    /**
     * @ORM\OneToMany(targetEntity="PRODUCTEUR", mappedBy="rAMASSEUR")
     */
    private $pRODUCTEUR;

    /**
     * @ORM\ManyToOne(targetEntity="SECTEUR", inversedBy="rAMASSEUR")
     * @ORM\JoinColumn(name="secteur_id", referencedColumnName="id")
     */
    private $sECTEUR;
}