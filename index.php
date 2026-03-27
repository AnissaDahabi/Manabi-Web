<?php
session_start();

// Pages accessibles sans être connecté
$pages_publiques = ['register', 'login', 'logout'];

// Page demandée
$page = isset($_GET['page']) ? $_GET['page'] : 'register';

if (!isset($_SESSION['id_user']) && !in_array($page, $pages_publiques)) {
    header('Location: index.php?page=register');
    exit;
}

switch ($page) {
    case 'register':
        require_once 'controllers/register_controller.php';
        break;

    case 'login':
        require_once 'controllers/login_controller.php';
        break;

    case 'logout':
        require_once 'controllers/logout_controller.php';
        break;

    case 'dashboard':
        require_once 'controllers/dashboard_controller.php';
        break;

    case 'cours':
        require_once 'controllers/cours_controller.php';
        break;

    case 'reservations':
        require_once 'controllers/reservation_controller.php';
        break;

    default:
        http_response_code(404);
        echo '<p>Page introuvable.</p>';
        break;
}