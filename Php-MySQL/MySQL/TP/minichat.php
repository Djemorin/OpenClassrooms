<!DOCTYPE html>
<html>
	<head>
		<title>Minichat</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<form action="Minichat_post.php" method="POST">
			<p>
				<label>Votre pseudo</label>
				<input type="text" name="pseudo">
			</p>
			<p>
				<label>Votre message</label>
				<input type="text" name="message">
			</p>
			<p>
				<button type="submit">Envoyer</button>
			</p>
		</form>
		<div class="chat">
			<?php
			require'connect.php';

			$reponse = $bdd->query('SELECT * FROM chat ORDER BY id DESC LIMIT 20');
			while($donnees = $reponse->fetch()){
				echo '<p><strong>'. $donnees['pseudo']. '</strong><em>'. ' a dit: '. '</em>'. $donnees['message']. '</p>';
				echo '<br>';
			}
			
			$reponse->closeCursor();

			?>
		</div>
	</body>
</html>