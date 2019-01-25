
<?php
session_start();

include 'class/database.class.php';
include 'class/user.class.php';


if(empty($_POST) == false) {

	var_dump($_POST);
    
    $user = new User();
    
    $user->addUser($_POST);


}

$template = 'register';
include 'layout.phtml';

?>