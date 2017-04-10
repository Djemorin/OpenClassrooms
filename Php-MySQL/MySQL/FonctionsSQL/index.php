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

// affiche les noms en majuscules
$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

echo "<br>";

// Obtenir la longueur d'un champ (compte le nombre de caractères)
$reponse = $bdd->query('SELECT LENGTH(nom) AS longueur_nom FROM jeux_video');
while ($donnees = $reponse->fetch())
{
	echo $donnees['longueur_nom'] . '<br />';
}

$reponse->closeCursor();

echo "<br>";

// Arrondir un nombre décimal
$reponse = $bdd->query('SELECT ROUND(prix, 2) AS prix_arrondi FROM jeux_video');
while ($donnees = $reponse->fetch())
{
	echo $donnees['prix_arrondi'] . '<br />';
}

$reponse->closeCursor();

echo "<br>";

// Calcule la moyenne
$reponse = $bdd->query('SELECT AVG(prix) AS prix_moyen FROM jeux_video');
while ($donnees = $reponse->fetch())
{
	echo $donnees['prix_moyen'] . '<br />';
}

$reponse->closeCursor();

//Autre syntaxe possible, une boucle étant inutile ici - et avec un arrondi en plus, et uniquement les jeux de Patrick:
$reponse = $bdd->query('SELECT ROUND(AVG(prix), 2) AS prix_moyen FROM jeux_video WHERE possesseur = "Patrick"');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'];

$reponse->closeCursor();

echo "<br/>";
echo "<br>";

//Additionner les valeurs - et avec un arrondi en plus, et uniquement les jeux de Patrick:
$reponse = $bdd->query('SELECT ROUND(SUM(prix), 2) AS prix_moyen FROM jeux_video WHERE possesseur = "Patrick"');

$donnees = $reponse->fetch();
echo $donnees['prix_moyen'];

$reponse->closeCursor();

echo "<br/>";
echo "<br>";

//Retourner la valeur maximale
$reponse = $bdd->query('SELECT MAX(prix) AS prix_max FROM jeux_video');

$donnees = $reponse->fetch();
echo $donnees['prix_max'];

$reponse->closeCursor();

echo "<br/>";
echo "<br>";

//Compter le nombre d'entrées
$reponse = $bdd->query('SELECT COUNT(*) AS nbjeux FROM jeux_video');

$donnees = $reponse->fetch();
echo $donnees['nbjeux'];

$reponse->closeCursor();

// SELECT COUNT(nbre_joueurs_max) AS nbjeux FROM jeux_video					compte le nombre d'entrées non vides (NULL)

// SELECT COUNT(DISTINCT possesseur) AS nbpossesseurs FROM jeux_video		compte le nombre d'entrées distinctes

echo "<br/>";
echo "<br>";

//Grouper des champs
$reponse = $bdd->query('SELECT ROUND(AVG(prix), 2) AS prix_moyen, console FROM jeux_video GROUP BY console');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prix_moyen'].' est le prix moyen des jeux sur '.$donnees['console'].'<br/>';
}
$reponse->closeCursor();

echo "<br/>";

$reponse = $bdd->query('SELECT ROUND(AVG(prix), 2) AS prix_moyen, possesseur FROM jeux_video GROUP BY possesseur');

while ($donnees = $reponse->fetch())
{
	echo 'La valeur moyenne des jeux de '.$donnees['possesseur']. ' est: '.$donnees['prix_moyen'].'<br/>';
}
$reponse->closeCursor();

echo "<br/>";
echo "<br>";

// HAVING : filtrer les données regroupées
$reponse = $bdd->query('SELECT ROUND(AVG(prix), 2) AS prix_moyen, console FROM jeux_video GROUP BY console HAVING prix_moyen <= 10');

while ($donnees = $reponse->fetch())
{
	echo $donnees['prix_moyen'].' est le prix moyen des jeux sur '.$donnees['console'].'<br/>';
}
$reponse->closeCursor();

?>