<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<?php
include_once 'class/config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body> 
        <?php
        $perso1 = new Personnage(33, 0);
        $perso2 = new Personnage(54, 0);
        
        $perso1->setExperience(48);
        
        $perso2->setExperience(70);
        
        $perso1->frapper($perso2);
        $perso1->gagnerExperience();
        
        $perso2->frapper($perso1);
        $perso2->gagnerExperience();
        
        echo 'Le perso 1 a une force de '.$perso1->getForce().'<br>';
        echo 'Le perso 2 a une force de '.$perso2->getForce().'<br>';
        echo '<br>';
        echo 'Le perso 1 a une expérience de '.$perso1->getExperience().'<br>';
        echo 'Le perso 2 a une expérience de '.$perso2->getExperience().'<br>';
        echo '<br>';
        echo 'Le perso 1 a des dégats de '.$perso1->getDegats().'<br>';
        echo 'Le perso 2 a des dégats de '.$perso2->getDegats().'<br>';
        
        // http://fr.openclassrooms.com/informatique/cours/programmez-en-oriente-objet-en-php/l-auto-chargement-de-classes
        ?>
    </body>
</html>
