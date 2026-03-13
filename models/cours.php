<?php
require_once __DIR__ . '/../config/database.php';

function getAllCours(){
    global $pdo;
    $stmt = $pdo->query("SELECT cours.*, users.nom, users.prenom FROM cours JOIN users ON cours.prof_id = users.id");
    return $stmt->fetchAll();
}

function getCoursById($id){
    global $pdo;
    $stmt = $pdo->prepare("SELECT cours.*, users.nom, users.prenom FROM cours JOIN users ON cours.prof_id = users.id WHERE cours.id = :id");
    $stmt->execute(array(':id' => $id));
    return $stmt->fetch();
}


