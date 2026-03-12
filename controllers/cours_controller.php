<?php
require_once __DIR__ . '/../models/User.php';

$user = getUserById($_SESSION['id_user']);

require_once __DIR__ . '/../views/cours_list.php';