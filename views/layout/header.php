<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manabi — Cours de japonais</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<?php if (isset($_SESSION['id_user'])): ?>

    <nav class="navbar">
        <div class="navbar-brand">
            <a href="index.php?page=dashboard">学 Manabi</a>
        </div>

        <ul class="navbar-links">
            <li><a href="index.php?page=dashboard"   <?= ($_GET['page'] ?? '') === 'dashboard'    ? 'class="active"' : '' ?>>Accueil</a></li>
            <li><a href="index.php?page=cours"        <?= ($_GET['page'] ?? '') === 'cours'         ? 'class="active"' : '' ?>>Cours</a></li>
            <li><a href="index.php?page=reservations" <?= ($_GET['page'] ?? '') === 'reservations'  ? 'class="active"' : '' ?>>Mes réservations</a></li>
        </ul>

        <div class="navbar-user">
            <span>
                <?= htmlspecialchars($_SESSION['prenom'] . ' ' . $_SESSION['nom']) ?>
            </span>
            <a href="index.php?page=logout" class="btn-logout">Déconnexion</a>
        </div>
    </nav>

<?php endif; ?>

<main class="container">