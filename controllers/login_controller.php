<?php
require_once __DIR__ . '/../models/User.php';

$erreur = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $email    = trim($_POST['email']    ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($email) || empty($password)) {
        $erreur = 'Veuillez remplir tous les champs.';

    } else {
        $user = getUserByEmail($email);

        if ($user === false) {
            $erreur = 'Email ou mot de passe incorrect.';

        } elseif (!verifyPassword($password, $user['password'])) {
            $erreur = 'Email ou mot de passe incorrect.';

        } else {
            $_SESSION['id_user'] = $user['id'];
            $_SESSION['prenom']  = $user['prenom'];
            $_SESSION['nom']     = $user['nom'];
            $_SESSION['role']    = $user['role'];

            header('Location: index.php?page=dashboard');
            exit;
        }
    }
}

require_once __DIR__ . '/../views/login.php';