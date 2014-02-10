<?php
include_once 'class/config.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            try {
                $db = new PDO('mysql:host=localhost;dbname=db', 'root', '');
            }
            catch(Exception $e) {
                echo 'Echec de la connexion à la base de données';
                exit();
            }
            // On admet que $db est un objet PDO.
            $request = $db->query('SELECT id, nom, forcePerso, degats, niveau, experience FROM personnages');

            while ($donnees = $request->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.
            {
              // On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
              // On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.
              $perso = new Personnage($donnees);

              echo $perso->getNom(), ' a ', $perso->getForcePerso(), ' de force, ', $perso->getDegats(), ' de dégâts, ', $perso->getExperience(), ' d\'expérience et est au niveau ', $perso->getNiveau();
            }
              var_dump($perso);
              
              // http://fr.openclassrooms.com/informatique/cours/programmez-en-oriente-objet-en-php/l-hydratation
         ?>
    </body>
</html>
