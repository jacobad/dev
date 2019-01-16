<?php
session_start();
var_dump($_SESSION);
include 'applico.php';
$query = $pdo->prepare


(
  'SELECT Post.Id,Title,Contents,FirstName,LastName,CreationDate
   FROM Author
   INNER JOIN Post on Author.id = Post.Author_ID'      
);


$query-> execute();

$liste = $query->fetchAll(PDO::FETCH_ASSOC);



$template = 'index';

include 'layout.phtml';


?>
