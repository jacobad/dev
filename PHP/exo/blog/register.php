<?php

session_start();

include 'hash.php';

if (empty($_POST) == false) {

    var_dump($_POST);
    $hashPassword = hashPassword($_POST['Password']);

    $pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa');

	$pdo->exec('SET NAMES UTF8');
    
    	$query = $pdo->prepare
	(
	    'INSERT INTO users (Mail, Password, FirstName, LastName, Pseudo, Role ) VALUES (?, ?, ?, ?, ? ,"users")'
	);

	$query->execute( [ $_POST['Mail'], $hashPassword, $_POST['LastName'], $_POST['FirstName'], $_POST['Pseudo'] ] );
}
var_dump($_POST);



$template = "register";
include 'layout.phtml';


?>