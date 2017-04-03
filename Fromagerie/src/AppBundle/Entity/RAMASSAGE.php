<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class RAMASSAGE
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
    private $nbBidon;

    /**
     * @ORM\Column(type="integer", nullable=false)
     */
    private $nbLitre;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $txMatGrasse;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $dateRamassage;

    /**
     * @ORM\ManyToOne(targetEntity="RAMASSEUR", inversedBy="rAMASSAGE")
     * @ORM\JoinColumn(name="ramasseur_id", referencedColumnName="id")
     */
    private $rAMASSEUR;

    /**
     * @ORM\ManyToOne(targetEntity="PRODUCTEUR", inversedBy="rAMASSAGE")
     * @ORM\JoinColumn(name="producteur_id", referencedColumnName="id")
     */
    private $pRODUCTEUR;
}