<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class PRODUCTEUR
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $distanceUsine;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $adresse_rue_1;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $adresse_rue_2;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $cp;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $appartenir;

    /**
     * @ORM\OneToMany(targetEntity="SECTEUR", mappedBy="pRODUCTEUR")
     */
    private $secteur;

    /**
     * @ORM\OneToMany(targetEntity="RAMASSAGE", mappedBy="pRODUCTEUR")
     */
    private $rAMASSAGE;

    /**
     * @ORM\OneToMany(targetEntity="PRODUCTEUR", mappedBy="pRODUCTEUR")
     */
    private $pRODUCTEUR2;

    /**
     * @ORM\ManyToOne(targetEntity="RAMASSEUR", inversedBy="pRODUCTEUR")
     * @ORM\JoinColumn(name="ramasseur_id", referencedColumnName="id")
     */
    private $rAMASSEUR;

    /**
     * @ORM\ManyToOne(targetEntity="PRODUCTEUR", inversedBy="pRODUCTEUR2")
     * @ORM\JoinColumn(name="producteur_id", referencedColumnName="id")
     */
    private $pRODUCTEUR;

}