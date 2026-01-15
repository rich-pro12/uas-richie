<?php
session_start(); // ← SATU-SATUNYA session_start

$url = $_GET['url'] ?? 'login';

switch ($url) {
    case 'login':
        require __DIR__ . '/app/views/auth/login.php';
        break;

    case 'auth':
        require __DIR__ . '/app/controllers/AuthController.php';
        break;

    case 'items':
        require __DIR__ . '/app/controllers/ItemController.php';
        break;

    case 'logout':
        session_destroy();
        header("Location: /uas-app/login");
        exit;

    default:
        echo "<h1>404</h1>";
}
