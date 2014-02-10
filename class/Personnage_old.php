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
/*class Personnage {
    
    // PROPRIETES
    private $_force = 20;
    private $_localisation = 'Montreuil';
    private $_experience = 0;
    private $_degats = 0;
    private static $_texte = 'Je vais tous vous tuer !';

        // CONSTANTES
    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;


    // CONSTRUCT
    public function __construct($forceInitiale) {
         $this->setForce($forceInitiale);
    }


    // GETTERS
    public function getDegats() {
        return $this->_degats;
    }
    public function getForce() {
        return $this->_force;
    }
    public function getExperience() {
        return $this->_experience;
    }
    
    // SETTERS
    public function setForce($force) {
        if (in_array($force, array(self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE))) {
            $this->_force = $force;
        }        
    }
    public function setExperience($experience) {
        if (!is_int($experience)) {
            trigger_error('L\'expérience d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if ($experience > 100) {
            trigger_error('L\'expérience d\'un personnage ne peut dépasser 100', E_USER_WARNING);
            return;
        }
        $this->_experience = $experience;
    }
    public function setDegats($degats) {
        if (!is_int($degats)) {
            trigger_error('Les dégâts d\'un personnage doivent être un nombre entier', E_USER_WARNING);
            return;
        }
        $this->_degats = $degats;
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
*/
?>
