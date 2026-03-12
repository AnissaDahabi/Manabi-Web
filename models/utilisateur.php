<?php
function obtenirUtilisateurParEmail($connexion, $email) {
    $stmt = $connexion->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $resultat = $stmt->get_result();
    return $resultat->fetch_assoc();
}

function obtenirUtilisateurParId($connexion, $id) {
    $stmt = $connexion->prepare("SELECT * FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $resultat = $stmt->get_result();
    return $resultat->fetch_assoc();
}