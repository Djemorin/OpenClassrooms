<?php
require 'connect.php';

$pseudo = htmlspecialchars($_POST['pseudo']);
$message = htmlspecialchars($_POST['message']);

if(!empty($pseudo) AND !empty($message)){
	$req = $bdd->prepare('INSERT INTO chat(pseudo, message) VALUES(:pseudo, :message)');
	$req->execute(array(
		'pseudo'=>$pseudo,
		'message'=>$message
		));
	header('location: minichat.php');
}else{
	echo 'Vous n\'avez pas tout entré comme il faut';
}