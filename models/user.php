<?php
require_once __DIR__ . '/../config/database.php';

function getUserByEmail($email) {
    global $pdo;

    $stmt = $pdo->prepare('SELECT * FROM users WHERE email = :email LIMIT 1');
    $stmt->execute(array(':email' => $email));

    return $stmt->fetch();
}

function verifyPassword($plainPassword, $storedPassword) {
    return $plainPassword === $storedPassword;
}

function getUserById($id) {
    global $pdo;

    $stmt = $pdo->prepare('SELECT id, nom, prenom, email, role FROM users WHERE id = :id LIMIT 1');
    $stmt->execute(array(':id' => $id));

    return $stmt->fetch();
}