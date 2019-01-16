<?php
session_start();
include 'applico.php';


$query = $pdo->prepare(
	' INSERT INTO
            Comment
            (Pseudo, Contents, Post_Id, CreationDate)
        VALUES
            (?, ?, ?, NOW())'
	);

$query->execute( [ $_POST['nickName'], $_POST['contents'], $_POST['postId'] ] );

header('Location: show_post.php?id='.$_POST['postId']);
exit();


?>
