<?php
function obtenirToutesLesLecons($connexion, $idCours) {
    $stmt = $connexion->prepare("SELECT * FROM lecons WHERE cours_id = ?");
    $stmt->bind_param("i", $idCours);
    $stmt->execute();
    $resultat = $stmt->get_result();
    return $resultat->fetch_all(MYSQLI_ASSOC);
}

function obtenirLeconParId($connexion, $idLecon) {
    $stmt = $connexion->prepare("SELECT * FROM lecons WHERE id = ?");
    $stmt->bind_param("i", $idLecon);
    $stmt->execute();
    $resultat = $stmt->get_result();
    return $resultat->fetch_assoc();
}