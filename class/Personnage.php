<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Personnage
 *
 * @author T1600_USR28
 */
class Personnage {
    
    // PROPRIETES
    private $_id;
    private $_nom;
    private $_forcePerso;
    private $_degats;
    private $_niveau;
    private $_experience;

    // CONSTANTES


    // CONSTRUCTEUR
    public function __construct() {
        
    }
    
    
    // HYDRATATION
     public function hydrate(array $array) {
//        $this->setId($array['id']);
//        $this->setNom($array['nom']);
//        $this->setForcePerso($array['forcePerso']);
//        $this->setDegats($array['degats']);
//        $this->setNiveau($array['niveau']);
//        $this->setExperience($array['experience']);
         foreach ($array as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set'.ucfirst($key);

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
         }
         
     }


    // GETTERS
    public function getId() {
        return $this->_id;
    }
    public function getNom() {
        return $this->_nom;
    }
    public function getForcePerso() {
        return $this->_forcePerso;
    }
    public function getDegats() {
        return $this->_degats;
    }
    public function getNiveau() {
        return $this->_niveau;
    }
    public function getExperience() {
        return $this->_experience;
    }
    
    // SETTERS
    public function setId($id) {
        $id = (int)$id;
        if($id > 0) {
            $this->_id = $id;
        }
    }
    public function setNom($nom) {
        if(is_string($nom)) {
            $this->_nom = $nom;
        }
    }
    public function setForcePerso($forcePerso) {
        $forcePerso = (int)$forcePerso;
        if($forcePerso >= 1 && $forcePerso <= 100) {
            $this->_forcePerso = $forcePerso;
        }
    }
    public function setDegats($degats) {
        $degats = (int)$degats;
        if($degats >= 0 && $degats <= 100) {
            $this->_degats = $degats;
        }
    }
    public function setNiveau($niveau) {
        $niveau = (int)$niveau;
        if($niveau >= 1 && $niveau <= 100) {
            $this->_niveau = $niveau;
        }
    }
    public function setExperience($experience) {
        $experience = (int)$experience;
        if($experience >= 1 && $experience <= 100) {
            $this->_experience = $experience;
        }
    }

    // AUTRES FONCTIONS
    public static function parler() {
        echo self::$_texte.'<br>';
    }
    public function deplacer() {
        
    }
    public function frapper($perso) {
        $perso->_degats += $this->_force;
    }
    public function gagnerExperience() {
        $this->_experience = $this->_experience++;
        return $this->_experience;
    }
    public function afficherExperience() {
        echo 'Mon expérience est de '.$this->_experience.' points !<br>';
    }
}

?>
