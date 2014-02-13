<?php

/**
 * Description of PersonnagesManager
 *
 * @author Do
 */
class PersonnagesManager {
    private $_db;
    
    public function __construct($db) {
        $this->setDb($db);
    }
    public function setDb(PDO $db) {
        $this->_db = $db;
    }
    
    public function add(Personnage $perso) {
        
    }
    public function delete(Personnage $perso) {
        
    }
    public function get($id) {
        
    }
    public function getList() {
        
    }
    public function update(Personnage $perso) {
        
    }
}
