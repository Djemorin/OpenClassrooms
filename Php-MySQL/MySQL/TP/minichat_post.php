<?php
require 'connect.php';

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);



if(!empty($pseudo) AND !empty($message)){
	$req = $bdd->prepare('INSERT INTO chat(date_post, pseudo, message) VALUES(NOW(), :pseudo, :message)');
	$req->execute(array(
		
		'pseudo'=>$pseudo,
		'message'=>$message
		));
	header("location: minichat.php?pseudo=$pseudo");
}else{
	header("location: minichat.php?pseudo=$pseudo");
	// echo 'Vous n\'avez pas tout entré comme il faut';
}