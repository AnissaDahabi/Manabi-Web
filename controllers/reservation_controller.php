<?php
require_once __DIR__ . '/../models/reservation.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id_session = $_POST['id_session'];
    $id_eleve   = $_SESSION['id_user'];

    $resultat = addReservation($id_eleve, $id_session);

    if ($resultat) {
        $message = "Réservation confirmée !";
        $type    = "success";
    } else {
        $message = "Vous êtes déjà inscrit à cette session.";
        $type    = "error";
    }

    $reservations = getReservationsByEleve($id_eleve);
    require_once __DIR__ . '/../views/reservations.php';

} else {

    $id_eleve     = $_SESSION['id_user'];
    $reservations = getReservationsByEleve($id_eleve);
    require_once __DIR__ . '/../views/reservations.php';

}