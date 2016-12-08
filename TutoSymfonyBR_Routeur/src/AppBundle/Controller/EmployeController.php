<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @route("/gestemp")
 */
class EmployeController extends Controller
{
    /**
     * @Route(
     *     path="/Employe/{id}",
     *     name="employe_voir",
     *     defaults={"id":99},
     *     requirements = {"id":"\d+"}
     * )
     */
    public function voirAction($id)
    {
        return $this->render('AppBundle:Employe:voir.html.twig', array(
            "id"=>$id
        ));
    }

    /**
     * @Route(
     *     path="/Employe/{nom}",
     *     name="employenom_voir",
     *     requirements = {"nom":"^[B][^0-9!:;.,?_+=*}&{|]+"}
     *      )
     */
    public function nomAction($nom)
    {
        return $this->render('AppBundle:Employe:voir.html.twig', array(
            "nom"=>$nom
        ));
    }
    /**
     * @Route("/Employev2/{id}")
    */
    public function voirActionv2($id)
    {
        return $this->render('AppBundle:Employe:voir.html.twig', array(
        "id"=>$id
        ));
    }

}
