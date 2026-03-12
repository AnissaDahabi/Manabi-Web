<?php
function obtenirReservationsParEleve($connexion, $idEleve) {
    $stmt = $connexion->prepare("SELECT reservations.id, sessions.date_session, sessions.heure_debut, sessions.heure_fin,
                                        cours.nom AS nom_cours, cours.niveau,
                                        users.nom AS nom_professeur, users.prenom AS prenom_professeur
                                 FROM reservations
                                 JOIN sessions ON reservations.session_id = sessions.id
                                 JOIN cours ON sessions.cours_id = cours.id
                                 JOIN users ON sessions.prof_id = users.id
                                 WHERE reservations.eleve_id = ?
                                 ORDER BY sessions.date_session, sessions.heure_debut");
    $stmt->bind_param("i", $idEleve);
    $stmt->execute();
    $resultat = $stmt->get_result();
    return $resultat->fetch_all(MYSQLI_ASSOC);
}

function ajouterReservation($connexion, $idEleve, $idSession) {
    $stmt = $connexion->prepare("INSERT INTO reservations (session_id, eleve_id) VALUES (?, ?)");
    $stmt->bind_param("ii", $idSession, $idEleve);
    return $stmt->execute();
}

function annulerReservation($connexion, $idEleve, $idSession) {
    $stmt = $connexion->prepare("DELETE FROM reservations WHERE eleve_id = ? AND session_id = ?");
    $stmt->bind_param("ii", $idEleve, $idSession);
    return $stmt->execute();
}