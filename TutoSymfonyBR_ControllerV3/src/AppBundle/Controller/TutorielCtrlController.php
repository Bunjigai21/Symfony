<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class TutorielCtrlController extends Controller
{
    /**
     * @Route(
     *     path="/hello/{nom}",
     *     name="TutorielCtrl_hello"
     *
     * )
     *
     */
    public function helloAction($nom)
    {
        $page ="<html><body><H1> Bonjour " . $nom . "</H1></body></html>";
        return new Response($page);
    }
    /**
     * @Route(
     *     path="/ailleurs/{nom}",
     *     name="TutorielCtrl_ailleurs"
     * )
     *
     */
    public function ailleursAction($nom)
    {
        $param=$nom." (Après redir)";
        $response=$this->redirectToRoute('TutorielCtrl_hello',array('nom'=>$param));
        return $response;
    }
    /**
     * @Route(
     *     path="/ctrl/transferer/{nom}",
     *     name="TutorielCtrl_transfert"
     * )
     *
     */
    public function tranfertAction($nom)
    {
        $param=$nom." (Après forward)";
        $response=$this->forward('TutorielCtrl_hello',array('nom'=>$param));
        return $response;
    }

}
