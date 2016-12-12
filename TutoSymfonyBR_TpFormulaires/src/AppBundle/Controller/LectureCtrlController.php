<?php

namespace AppBundle\Controller;



use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Employe;

class LectureCtrlController extends Controller
{
    /**
     * @Route("/index")
     * name:index
     */
    public function indexAction()
    {
        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class)
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        return $this->render('@App/LectureCtrl/index.html.twig',array(
            'leFormulaire' =>$formulaire->createView()));
    }
    /**
     * @Route("/view")
     * name:view
     */
    public function viewAction()
    {
        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class)
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        return $this->render('@App/LectureCtrl/view.html.twig',array(
            'leFormulaire' =>$formulaire->createView()));
    }
    /**
     * @Route("/afficheEmpParam")
     * name:lectureCtrl_afficheEmpParam
     */
    public function afficheEmpParamAction()
    {
        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class)
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        $sport='Rugby';
        $voitures=array('Ford', 'Renault','Peugeot');
        return $this->render('@App/LectureCtrl/autreParam.html.twig',array(
            'leFormulaire' =>$formulaire->createView(),'sport'=>$sport,'voitures'=>$voitures));
    }
}