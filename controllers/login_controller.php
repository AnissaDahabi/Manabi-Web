<?php
$connexion = include __DIR__ . '/../config/database.php';
include __DIR__ . '/../models/utilisateur.php';
include __DIR__ . '/../views/login.php';

session_start();

$error = "";

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'], $_POST['password']) && !empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = getUserByEmail($connexion, $email);

    if($user && $user['password'] === $password){
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../views/dashboard.php");
        exit;
    } else {
        $error = "Email ou mot de passe incorrect";
    }
}
