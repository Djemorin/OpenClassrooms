<?php

	require'connect.php';

	$reponse = $bdd->query('SELECT DATE_FORMAT(date_post, \'[%d/%m/%Y - %Hh%imin%ss] \') AS date_post_fr, pseudo, message FROM chat ORDER BY id DESC LIMIT 0,20');
	while($donnees = $reponse->fetch()){
		echo '<p><span>'.$donnees['date_post_fr'].'</span><strong>'. $donnees['pseudo']. '</strong><em>'. ' a dit: '. '</em>'. $donnees['message']. '</p>';
		echo '<hr>';
	}

	$reponse->closeCursor();