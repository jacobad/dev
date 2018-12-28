<?php

include 'utilities.php';

if(empty($_POST) == false) {


    //var_dump($_POST);
    $tache = $_POST['tache'];
    $dateline        = $_POST['dateline'];
    $priority    = $_POST['priority'];
    $titre       = $_POST['titre'];

    
    addTask($titre, $tache, $dateline, $priority);
    
    header('Location: tab.php');
    exit();
}

function addTask($titre, $tache, $dateline, $priority) {
    
    $taskData =
    [
        $titre,
        $tache,
        $dateline,
        $priority
    ];
    
    saveTask($taskData);


}


?>