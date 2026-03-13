<?php
require_once __DIR__ . '/../config/database.php';

function getSessionsByCours($cours_id){
    global $pdo;
    $stmt = $pdo->prepare("SELECT sessions.*, users.nom, users.prenom FROM sessions JOIN users ON sessions.prof_id = users.id WHERE sessions.cours_id = :cours_id");
    $stmt->execute(array(':cours_id' => $cours_id));
    return $stmt->fetchAll();
}
