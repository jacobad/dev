<?php


if(array_key_exists('id', $_Post) == false || ctype_digit($_Post['id']) == false) {
    header('Location: index.php');
    exit();
}

include 'applico.php';


$query = $pdo->prepare(
	' SELECT
            Post.Id,
            Title,
            Contents,
            CreationDate,
            FirstName,
            LastName
        FROM
            Post
        INNER JOIN
            Author
        ON
            Post.Author_Id = Author.Id
        WHERE
            Post.Id = ?'
	);

$query->execute( [ $_GET['id'] ] );
$post = $query->fetch(PDO::FETCH_ASSOC);


$template = "show_post";

include 'layout.phtml';

?>