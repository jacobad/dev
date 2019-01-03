<?php

$pdo = new PDO('mysql:host=localhost;dbname=classicmodels', 'root', 'troiswa');

$pdo->exec('SET NAMES UTF8');

$query = $pdo->prepare
(
   'SELECT*
	FROM orders'
	);




$query->execute();

$offices = $query->fetchAll(PDO::FETCH_ASSOC);




include'bondecommande.phtml';
include'get.php';

?>