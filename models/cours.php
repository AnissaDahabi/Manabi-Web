<?php
function obtenirTousLesCours($connexion) {
    $sql = "SELECT cours.id, cours.nom, cours.niveau, cours.description,
                   users.nom AS nom_professeur, users.prenom AS prenom_professeur
            FROM cours
            JOIN users ON cours.prof_id = users.id
            ORDER BY cours.nom";
    $resultat = $connexion->query($sql);
    if (!$resultat) die("Erreur SQL: " . $connexion->error);
    return $resultat->fetch_all(MYSQLI_ASSOC);
}

function obtenirCoursParId($connexion, $idCours) {
    $stmt = $connexion->prepare("SELECT cours.id, cours.nom, cours.niveau, cours.description,
                                        users.nom AS nom_professeur, users.prenom AS prenom_professeur
                                 FROM cours
                                 JOIN users ON cours.prof_id = users.id
                                 WHERE cours.id = ?");
    $stmt->bind_param("i", $idCours);
    $stmt->execute();
    $resultat = $stmt->get_result();
    return $resultat->fetch_assoc();
}