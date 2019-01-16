<?php
session_start();

include 'applico.php';

$query = $pdo->prepare(
	'SELECT Post.Id, Title, Contents, CreationDate, FirstName, LastName, category.Name AS Category_Name FROM Post INNER JOIN Author ON Post.Author_Id = Author.Id INNER JOIN category ON Post.Category = category.Id ORDER BY CreationDate DESC'
	);

$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

$template = 'admin';

include 'layout.phtml';


?>