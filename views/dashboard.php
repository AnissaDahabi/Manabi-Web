<?php
session_start();

if(!isset($_SESSION['user_id'])){
    header("Location: login.php");
    exit;
}

echo "<h1>Bienvenue sur le dashboard</h1>";
echo "<p>Votre rôle : " . $_SESSION['role'] . "</p>";
echo "<a href='../controllers/logout_controller.php'>Déconnexion</a>";