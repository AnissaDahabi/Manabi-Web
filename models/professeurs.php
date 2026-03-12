<?php
function getTousLesProfesseurs($connexion) {
    $result = $connexion->query("SELECT id, nom, prenom, email FROM users WHERE role='professeur' ORDER BY nom ASC");
    if(!$result) { die("Erreur SQL: " . $connexion->error); }
    return $result->fetch_all(MYSQLI_ASSOC);
}

function getProfesseurParId($connexion, $id) {
    $stmt = $connexion->prepare("SELECT id, nom, prenom, email FROM users WHERE id = ? AND role='professeur'");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}