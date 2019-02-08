<?php


$requestUrl = $_SERVER['SCRIPT_NAME'];

$adresse = "http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];

// $_SERVER["REQUEST_URI"]  => rooting/index2.php/register

$url = substr($adresse,20 );

$repo = 'application/models';
$dossier = opendir($repo);

while($fichier = readdir($dossier)){
	 if(is_file($repo.'/'.$fichier) && $fichier !='/' && $fichier !='.' && $fichier != '..'){
     
        include $repo.'/'.$fichier;
        
    }

}
closedir($dossier);

//$adresse => http://10.10.109.52/rooting/index2.php/register

// $url => register

if($url == false || $url=='') {

	include 'application/controllers/home/homeController.class.php';
    
    $page = 'home';
    
} else {

	include 'controllers/'.$url.'Controller.class.php';
	$page = $url;
}

include 'application/www/layout2.phtml';

?>
