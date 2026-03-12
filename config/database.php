<?php
$config = include __DIR__ . '/config.php';

$connexion = new mysqli($config['host'], $config['user'], $config['password'], $config['db']);

if ($connexion->connect_error) {
    die("Connexion échouée : " . $connexion->connect_error);
}

return $connexion;