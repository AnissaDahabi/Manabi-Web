<?php
require_once __DIR__ . '/../models/Cours.php';
require_once __DIR__ . '/../models/Session.php';

if (!isset($_GET['id'])) {

    if (!empty($_GET['recherche'])) {
        $cours = searchCours($_GET['recherche']);
    } else {
        $cours = getAllCours();
    }

    $recherche = $_GET['recherche'] ?? '';
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