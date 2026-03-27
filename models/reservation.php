<?php
require_once __DIR__ . '/../config/database.php';

function addReservation($id_eleve, $id_session) {
    global $pdo;

    $stmt = $pdo->prepare("SELECT id FROM reservations WHERE eleve_id = :eleve_id AND session_id = :session_id");
    $stmt->execute([':eleve_id' => $id_eleve, ':session_id' => $id_session]);

    if ($stmt->fetch()) {
        return false; // Déjà réservé
    }

    $stmt = $pdo->prepare("
        INSERT INTO reservations (eleve_id, session_id, statut, date_reservation) 
        VALUES (:eleve_id, :session_id, 'en attente', NOW())
    ");

    return $stmt->execute([
        ':eleve_id'  => $id_eleve,
        ':session_id' => $id_session
    ]);
}

function getReservationsByEleve($id_eleve) {
    global $pdo;

    $stmt = $pdo->prepare("
        SELECT reservations.*, 
               sessions.date_session, sessions.heure_debut, sessions.heure_fin,
               cours.intitule AS intitule_cours, cours.niveau,
               users.nom, users.prenom
        FROM reservations
        JOIN sessions ON reservations.session_id = sessions.id
        JOIN cours ON sessions.cours_id = cours.id
        JOIN users ON sessions.prof_id = users.id
        WHERE reservations.eleve_id = :eleve_id
        ORDER BY sessions.date_session ASC
    ");
    $stmt->execute(array(':eleve_id' => $id_eleve));

    return $stmt->fetchAll();
}