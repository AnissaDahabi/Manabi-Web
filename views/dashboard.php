<?php require_once __DIR__ . '/layout/header.php'; ?>

    <h2>Bonjour, <?= $user['prenom'] ?> !</h2>

    <p>Que voulez-vous faire ?</p>

    <a href="index.php?page=cours">Voir les cours disponibles</a>
    <a href="index.php?page=reservations">Mes réservations</a>

<?php require_once __DIR__ . '/layout/footer.php'; ?>