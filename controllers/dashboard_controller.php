<?php
require_once __DIR__ . '/../models/user.php';

$user = getUserById($_SESSION['id_user']);

require_once __DIR__ . '/../views/dashboard.php';