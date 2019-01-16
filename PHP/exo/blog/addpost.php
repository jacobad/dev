<?php

session_start();

include 'applico.php';



$query = $pdo->prepare(
	    'SELECT
	        *
	     FROM category'
);


$query->execute();
$categories = $query->fetchAll(PDO::FETCH_ASSOC);

//var_dump($categories);

$query = $pdo->prepare(
	    'SELECT
	        *
	     FROM Author'
);

$query->execute();
$authors = $query->fetchAll(PDO::FETCH_ASSOC);

//var_dump($authors);

if (empty($_POST) == false) {
	
	var_dump($_POST);
    $title = $_POST['title'];
    $content = $_POST['commentaire'];
    $author_id = $_POST['author'];
    $category_id = $_POST['category'];
    
    $query = $pdo->prepare
	(
	    '
            INSERT INTO
                Post
                (Title, Contents, Author_ID, Category, CreationDate)
            VALUES
                (?, ?, ?, ?, NOW())
        '

	);

    
    $query->execute( [ $title,$content, $author_id, $category_id ] );
    
    header('Location: index.php');
    exit();
    

}




$template = 'addpost';

include 'layout.phtml';

?>
