<?php

try
{

$VALEUR_hote='localhost';
$VALEUR_port='3306';
$VALEUR_nom_bd='portfolio';
$VALEUR_user='root';
$VALEUR_mot_de_passe='';

$connexion = new PDO('mysql:host='.$VALEUR_hote.';port='.$VALEUR_port.';dbname='.$VALEUR_nom_bd, $VALEUR_user, $VALEUR_mot_de_passe);
$connexion->exec("SET NAMES utf8");

}
catch (Exception $e)
{  

	      
    die('Erreur : ' . $e->getMessage());
}




?>
