 <?php

$requestUrl = $_SERVER['SCRIPT_NAME'];


if(empty($_GET) == true) {

	include 'application/controllers/home/homeController.class.php';

	$page = 'home';

} else if (array_key_exists('page', $_GET)){


	include 'application/controllers/'.$_GET['page'].'/'.$_GET['page'].'Controller.class.php';
	$page = $_GET['page'];

} else {

	echo 'url incorrect';
}


include 'application/www/layout.phtml';

?>
