<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<h2>Bonjour <?php echo $_POST['prenom']; ?>!</h2>

		<?php
		// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
		if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
		{
		        // Testons si le fichier n'est pas trop gros
		        if ($_FILES['monfichier']['size'] <= 100000000)
		        {
		                // Testons si l'extension est autorisée
		                $infosfichier = pathinfo($_FILES['monfichier']['name']);
		                $extension_upload = $infosfichier['extension'];
		                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
		                if (in_array($extension_upload, $extensions_autorisees))
		                {
		                        // On peut valider le fichier et le stocker définitivement
		                        move_uploaded_file($_FILES['monfichier']['tmp_name'], 'uploads/' . basename($_FILES['monfichier']['name']));
		                       ?>
		                       <img src="uploads/<?= basename($_FILES['monfichier']['name']) ?>" width=100px/>

		                       <?php
		                }
		        }
		}
		?>

		<p>Vous avez choisi de passer la soirée avec <?php echo $_POST['choix']; ?>. Excellent choix!</p>

		<p>Votre repas comprendra:
			<ul>
				<?php
					foreach($_POST['case'] as $case){
				?>
					<li><?= $case ?></li>
				<?php
					}
				?>
			</ul>
		</p>

		<p><?php echo $_POST['champagne']; ?></p>

		<p>
			<?php
				if ($_POST['message'] != NULL){
					echo 'Remarques particulières:' . ' ' . '<em>'. $_POST['message']. '</em>';
				}
			?>
		</p>
		<p>Si vous voulez modifier une option, <a href="formulaire.php">cliquez ici</a> pour revenir à la page précédente.</p>
	</body>
</html>