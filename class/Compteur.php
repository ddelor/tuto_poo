<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Compteur
 *
 * @author Do
 */
class Compteur {
    private static $_compteur = 0;
    
    public function __construct() {
        self::$_compteur++;
    }
    public static function getCompteur() {
        return self::$_compteur;
    }
}
