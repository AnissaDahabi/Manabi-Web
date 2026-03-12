<?php
session_start();

// Pages accessibles sans être connecté
$pages_publiques = ['login', 'logout'];

// Page demandée
$page = isset($_GET['page']) ? $_GET['page'] : 'login';

if (!isset($_SESSION['id_user']) && !in_array($page, $pages_publiques)) {
    header('Location: index.php?page=login');
    exit;
}

switch ($page) {
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