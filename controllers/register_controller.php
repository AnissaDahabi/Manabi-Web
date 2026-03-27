<?php
require_once __DIR__ . '/../models/user.php';

$erreur = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $nom      = trim($_POST['nom']      ?? '');
    $prenom   = trim($_POST['prenom']   ?? '');
    $email    = trim($_POST['email']    ?? '');
    $password = trim($_POST['password'] ?? '');

    if (empty($nom) || empty($prenom) || empty($email) || empty($password)) {
        $erreur = 'Veuillez remplir tous les champs.';

    } else {
        $user = getUserByEmail($email);

        if ($user !== false) {
            $erreur = 'Un compte existe déjà avec cet email.';
        } else {
            $id_user = addUser($nom, $prenom, $email, $password);

            if ($id_user) {
                $_SESSION['id_user'] = $id_user;
                $_SESSION['prenom'] = $prenom;
                $_SESSION['nom'] = $nom;

                header('Location: index.php?page=dashboard');
                exit;
            } else {
                $erreur = "Une erreur est survenue lors de l'inscription.";
            }
        }
    }
}

require_once __DIR__ . '/../views/register.php';