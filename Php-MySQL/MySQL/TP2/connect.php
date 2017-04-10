<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch(Exception $error)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$error->getMessage());
}