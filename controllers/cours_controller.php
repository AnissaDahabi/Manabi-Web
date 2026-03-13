<?php
require_once __DIR__ . '/../models/cours.php';
require_once __DIR__ . '/../models/session.php';

if(!isset($_GET['id'])){
    $cours = getAllcours();
    require_once __DIR__ . '/../views/cours_list.php';
} else {
    $cours = getCoursById($_GET['id']);
    if ($cours === false) {
        echo "Ce cours n'existe pas.";
        exit;
    }
    $sessions = getSessionsByCours($_GET['id']);

    require_once __DIR__ . '/../views/cours_detail.php';
}