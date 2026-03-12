<?php
function obtenirToutesLesSessions($connexion) {
    $sql = "SELECT sessions.id, sessions.date_session, sessions.heure_debut, sessions.heure_fin,
                   cours.nom AS nom_cours, cours.niveau,
                   users.nom AS nom_professeur, users.prenom AS prenom_professeur
            FROM sessions
            JOIN cours ON sessions.cours_id = cours.id
            JOIN users ON sessions.prof_id = users.id
            ORDER BY sessions.date_session, sessions.heure_debut";
    $resultat = $connexion->query($sql);
    if (!$resultat) die("Erreur SQL: " . $connexion->error);
    return $resultat->fetch_all(MYSQLI_ASSOC);
}

function obtenirSessionParId($connexion, $idSession) {
    $stmt = $connexion->prepare("SELECT sessions.id, sessions.date_session, sessions.heure_debut, sessions.heure_fin,
                                        cours.nom AS nom_cours, cours.niveau,
                                        users.nom AS nom_professeur, users.prenom AS prenom_professeur
                                 FROM sessions
                                 JOIN cours ON sessions.cours_id = cours.id
                                 JOIN users ON sessions.prof_id = users.id
                                 WHERE sessions.id = ?");
    $stmt->bind_param("i", $idSession);
    $stmt->execute();
    $resultat = $stmt->get_result();
    return $resultat->fetch_assoc();
}