<?php

// session SUDAH aktif dari index.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === 'admin' && $password === 'admin') {
        $_SESSION['login'] = true;

        header("Location: /uas-app/items");
        exit;
    }

    // gagal login
    header("Location: /uas-app/login");
    exit;
}
