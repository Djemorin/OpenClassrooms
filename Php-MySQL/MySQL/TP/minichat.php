<!DOCTYPE html>
<html>
	<head>
		<title>Minichat</title>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="style.css">
		<!-- <meta http-equiv="refresh" content="10"> -->
	</head>

	<body>
		<article>
			<form action="Minichat_post.php" method="POST">
				<div class="entree">
					<div class="formleft">
						<label class>Votre pseudo: </label>
					</div>
					<div class="formright">
						<input type="text" name="pseudo" value="<?php if(isset($_GET['pseudo'])){
							echo $_GET['pseudo'];
							}
							?>">
					</div>
				</div>
				
				<div class="entree">
					<div class="formleft">
						<label>Votre message: </label>
					</div>
					<div class="formright">
						<input type="text" name="message" autofocus>
						<button type="submit">Envoyer</button>
					</div>
				</div>
					
				
				
			</form>
		
			<div id="chat">
				<?php

					require'connect.php';

					$reponse = $bdd->query('SELECT DATE_FORMAT(date_post, \'[%d/%m/%Y - %Hh%imin%ss] \') AS date_post_fr, pseudo, message FROM chat ORDER BY id DESC LIMIT 0,20');
					while($donnees = $reponse->fetch()){
						echo '<p><span>'.$donnees['date_post_fr'].'</span><strong>'. $donnees['pseudo']. '</strong><em>'. ' a dit: '. '</em>'. $donnees['message']. '</p>';
						echo '<hr>';
					}
					
					$reponse->closeCursor();

				?>
			</div>
		</article>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
			function refresh() {
				$.ajax({
				    url: "minichat.php", // Ton fichier ou se trouve ton chat
				    success:
				        function(retour){
				        $("#chat").html(retour); // rafraichi toute ta DIV "bien sur il lui faut un id "
				    }
				});
				 
				}
				 
				setInterval(refresh(), 2000) // Répète la fonction toutes les 10 sec
	</script>
	</body>
	
</html>