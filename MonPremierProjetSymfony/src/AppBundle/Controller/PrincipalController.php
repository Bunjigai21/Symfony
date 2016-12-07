<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class PrincipalController extends Controller
{
    /**
     * @Route("/welcome/{nom}")
     */
    public function welcomeAction($nom)
    {
        return $this->render('AppBundle:Principal:welcome.html.twig', array(
            'nom'=>$nom
        ));
    }
    /**
     * @Route("/message/{departement}")
     */
    public function messageAction($departement)
    {
        $dir = $this->get('kernel')->getRootDir();
        return $this->render('AppBundle:Principal:message.html.twig', array(
            'departement'=>$departement,
            'dir'=>$dir
        ));
    }


}
