<?php

session_start();
include 'hash.php';

        
if (!empty($_POST)) {
	var_dump($_POST);

	$pdo = new PDO('mysql:host=localhost;dbname=blog', 'root', 'troiswa');

	$pdo->exec('SET NAMES UTF8');
    
    $query = $pdo->prepare
	(
	    'SELECT * FROM users WHERE Mail= ?'
	);

	$query->execute( [ $_POST['Mail'] ] );
    
    $user = $query->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
    if ($user == false){
        $error = true;
        echo "Votre adresse mail n'existe pas...";    

    }else if( verifyPassword($_POST['Password'], $user['Password']) == true )  {
    
    	var_dump('connecté');
        
        $_SESSION['Mail'] = $user['Mail'];
        $_SESSION['Password'] = $user['Password'];
        $_SESSION['FirstName'] = $user['FirstName'];
        $_SESSION['LastName'] = $user['LastName'];
        $_SESSION['Pseudo'] = $user['Pseudo'];
        $_SESSION['Role'] = $user['Role'];

        header('Location: index.php');
        exit();
    
    } else {
    	echo "pas bon mdp";
    }


}
$template = 'login';
include 'layout.phtml';


?>

