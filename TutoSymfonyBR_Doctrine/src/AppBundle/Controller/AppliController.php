<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Tests\Extension\Core\Type\IntegerTypeTest;
use AppBundle\Entity\Cours;
use AppBundle\Entity\Seminaire;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;



class AppliController extends Controller
{

    /**
     * @Route("/creercours")
     */
    public function creerCoursAction(Request $request)
    {
        $cours = new Cours();
        $formulaire = $this->createFormBuilder($cours)
            ->add('libellecours', TextType::class, array('label' => 'Libellé du cours : '))
            ->add('nbjours', IntegerType::class, array('label' => 'Nombre de jours :'))
            ->add('Enregistrer', SubmitType::class)
            ->getForm();
        $formulaire->handleRequest($request);

        if ($formulaire->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cours);
            $em->flush();
            return $this->render('ok.html.twig', array("message"=>"cours créé"));
        }

        return $this->render('cours.html.twig', array('leFormulaire' => $formulaire->createView()));

    }
    /**
     * @Route("/creerseminaire")
     */
    public function creerSeminaireAction(Request $request){
        $seminaire = new Seminaire();
        $formulaire = $this->createFormBuilder($seminaire)
            ->add('datedebutsem', DateType::class, array('label' => 'Date debut : ', 'data' => new \DateTime(),))
            ->add('cours', EntityType::class, array('class' => 'AppBundle:Cours',
                'label' => 'Cours :',
                'required' => 'true',
                'multiple' => false,
                'choice_label' => 'libelleCours',
                'expanded' => true,
            ))
            ->add('Enregistrer', SubmitType::class)
            ->getForm();

        $formulaire->handleRequest($request);

        if($formulaire->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($seminaire);
            $em->flush();
            return $this->render('ok.html.twig', array('message' => "Seminaire créé"));
        }

        return $this->render('cours.html.twig', array('leFormulaire' => $formulaire->createView()));

    }
}




