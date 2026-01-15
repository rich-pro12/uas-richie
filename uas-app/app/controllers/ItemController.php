<?php

// session SUDAH aktif dari index.php
if (!isset($_SESSION['login'])) {
    header("Location: /uas-app/login");
    exit;
}

require_once __DIR__ . '/../models/Item.php';

$action = $_GET['action'] ?? 'index';

switch ($action) {

    case 'create':
        require __DIR__ . '/../views/items/create.php';
        break;

    case 'store':
        Item::store($_POST['name'], $_POST['description']);
        header("Location: /uas-app/items");
        exit;

    case 'edit':
        $item = Item::find($_GET['id']);
        require __DIR__ . '/../views/items/edit.php';
        break;

    case 'update':
        Item::update($_POST['id'], $_POST['name'], $_POST['description']);
        header("Location: /uas-app/items");
        exit;

    case 'delete':
        Item::delete($_GET['id']);
        header("Location: /uas-app/items");
        exit;

    default:
        $items = Item::all();
        require __DIR__ . '/../views/items/index.php';
}
