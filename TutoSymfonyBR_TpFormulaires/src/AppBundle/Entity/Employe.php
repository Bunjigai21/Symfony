<?php

namespace AppBundle\Entity;

class Employe {

    private $num;
    private $nom;
    private $prenom;
    private $dateNaissance;
   /* private $sport;
    private $voitures;*/

    public function getNum(){
        return $this->num;
    }
    public function setNum($num){
        $this->num=$num;
    }
    public function getNom () {
        return $this->nom;
    }
    public function setNom($nom){
        $this->nom=$nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function setPrenom($prenom){
        $this->prenom=$prenom;
    }
    public function getDateNaissance(){
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance){
        $this->$dateNaissance =$dateNaissance;
    }
    /*public function getSport(){
        return $this->sport;
    }
    public function setSport($sport){
        $this->sport=$sport;
    }
    public function getVoitures(){
    return $this->voitures;
}
    public function setVoitures($voitures){
        $this->voitures=$voitures;
    }*/

    function __construct($num,$nom,$prenom,$dateNaissance){
        $this->num=$num;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->dateNaissance=$dateNaissance;
    }
}