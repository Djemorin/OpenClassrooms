<h1>Les tableaux en PhP</h1>
<ol>
	<li><h3>La boucle FOR</h3></li>
	<br>
	<?php
	// On crée notre array $prenoms
	$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

	// Puis on fait une boucle pour tout afficher :
	for ($numero = 0; $numero < 5; $numero++)
	{
	    echo $prenoms[$numero] . '<br />'; // affichera $prenoms[0], $prenoms[1] etc.
	}
	?>

	<br>
	<li><h3>La boucle FOREACH - Spéciale pour les tableaux, pas besoin de connaître le nombre de cases comme avec la boucle FOR</h3></li>
	<br>
	<?php
	$prenoms = array ('François', 'Michel', 'Nicole', 'Véronique', 'Benoît');

	foreach($prenoms as $element)
	{
	?>
	    <ul>
	    	<li><?php echo $element . '<br />'?></li> <!-- affichera $prenoms[0], $prenoms[1] etc. -->
	    </ul>
	<?php
	}
	?>
	<br>

<!--  afficher toutes les valeurs d'un tableau associatif  -->
<li><h3>Afficher les valeurs d'un tableau associatif</h3></li>
<br>
	<?php
		$coordonnees = array (
		    'prenom' => 'François',
		    'nom' => 'Dupont',
		    'adresse' => '3 Rue du Paradis',
		    'ville' => 'Marseille');

		foreach($coordonnees as $element)
		{
		    echo $element . '<br />';
		}
	?>
	<br>

<!--  afficher les clés et les valeurs d'un tableau associatif  -->
<li><h3>Afficher les clés et les valeurs d'un tableau associatif</h3></li>
<br>
	<?php
		$coordonnees = array (
		    'prenom' => 'François',
		    'nom' => 'Dupont',
		    'adresse' => '3 Rue du Paradis',
		    'ville' => 'Marseille');

		foreach($coordonnees as $cle => $element)
		{
		    echo '[' . $cle . '] vaut ' . $element . '<br />';
		}
	?>
	<br>

<!-- array_key_exists: vérifier si une clé existe -->
<li><h3>Vérifier si une clé existe avec <em>array_key_exists</em></h3></li>
<br>	
	<?php
		$coordonnees = array (
		    'prenom' => 'François',
		    'nom' => 'Dupont',
		    'adresse' => '3 Rue du Paradis',
		    'ville' => 'Marseille');

		if (array_key_exists('nom', $coordonnees))
		{
		    echo 'La clé "nom" se trouve dans le tableau "coordonnées" !';
		}

		if (array_key_exists('pays', $coordonnees))
		{
		    echo 'La clé "pays" se trouve dans le tableau "coordonnées" !';
		}

	?>
	<br>
		<br>

<!-- in_array: vérifier si une valeur existe -->
<li><h3>Vérifier si une valeur existe avec <em>in_array</em></h3></li>
<br>
	<?php
		$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

		if (in_array('Myrtille', $fruits))
		{
		    echo 'La valeur "Myrtille" se trouve dans les fruits !';
		}

		if (in_array('Cerise', $fruits))
		{
		    echo 'La valeur "Cerise" se trouve dans les fruits !';
		}
	?>
	<br>
		<br>

<!-- array_search: renvoie la clé si la valeur recherchée existe -->
<li><h3><em>array_search</em>: renvoie la clé si la valeur recherchée existe</h3></li>
<br>
	<?php
		$fruits = array ('Banane', 'Pomme', 'Poire', 'Cerise', 'Fraise', 'Framboise');

		$position = array_search('Fraise', $fruits);
		echo '"Fraise" se trouve en position ' . $position . '<br />';

		$position = array_search('Banane', $fruits);
		echo '"Banane" se trouve en position ' . $position;
	?>
</ol>