<?php

namespace AppBundle\Controller;



use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\component\httpfoundation\request;
use AppBundle\Entity\Employe;

class LectureCtrlController extends Controller
{
    /**
     * @Route(path="/index",
     * name="LectureCtrl_index")
     */
    public function indexAction()
    {
        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class, array("years"=>range(1970,date('Y')-18)))
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        return $this->render('@App/LectureCtrl/index.html.twig',array(
            'leFormulaire' =>$formulaire->createView()));
    }
    /**
     * @Route(path="/view",
     * name="LectureCtrl_view")
     */
    public function viewAction()
    {
        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class, array("years"=>range(1970,date('Y')-18)))
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        return $this->render('@App/LectureCtrl/view.html.twig',array(
            'leFormulaire' =>$formulaire->createView()));
    }
    /**
     * @Route(path ="/afficheEmpParam",
     * name="LectureCtrl_afficheEmpParam"
     * )
     */
    public function afficheEmpParamAction()
    {
        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));
        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class, array("years"=>range(1970,date('Y')-18)))
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        $sport='Rugby';
        $voitures=array('Ford', 'Renault','Peugeot');
        return $this->render('@App/LectureCtrl/autreParam.html.twig',array(
            'leFormulaire' =>$formulaire->createView(),'sport'=>$sport,'voitures'=>$voitures));
    }
    /**
     * @Route(path="/afficheEmpTwig",
     * name="LectureCtrl_afficheEmpTwig"
     *     )
     */
    public function afficheEmpTwigAction()
    {


        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));

        $employe->setPrenom("Jean");
        $employe->setDateNaissance(new \DateTime('today'));

        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class, array("years"=>range(1970,date('Y')-18)))
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        return $this->render('@App/LectureCtrl/afficheEmpTwig.html.twig',array(
            'uneEntree' =>'je viens du controller','leFormulaire'=>$formulaire->createView()));
    }

    /**
     * @Route (path="/afficheEmpTwigCss",
     *     name="LectureCtrl_AfficheEmpTwigCss"
     * )
     */
    public function afficheEmpTwigCssAction(){
        $employe = new Employe(1,"Dupont","Jean",new \DateTime('1988-12-25'));

        $employe->setPrenom("Jean");
        $employe->setDateNaissance(new \DateTime('today'));

        $formulaire = $this->createFormBuilder($employe)
            ->add('num',NumberType::class)
            ->add('nom',TextType::class)
            ->add('prenom',TextType::class)
            ->add('dateNaissance',DateType::class, array("years"=>range(1970,date('Y')-18)))
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
        return $this->render('@App/LectureCtrl/afficheEmpTwigCss.html.twig',array(
            'uneEntree' =>'je viens du controller','leFormulaire'=>$formulaire->createView()));
    }
}