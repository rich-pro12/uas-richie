<?php

require_once __DIR__ . '/../../database.php';

class Item {

    public static function all() {
        global $conn;
        return mysqli_query($conn, "SELECT * FROM items");
    }

    public static function store($name, $desc) {
        global $conn;
        mysqli_query($conn, "INSERT INTO items (name, description) VALUES ('$name', '$desc')");
    }

    public static function find($id) {
        global $conn;
        $q = mysqli_query($conn, "SELECT * FROM items WHERE id=$id");
        return mysqli_fetch_assoc($q);
    }

    public static function update($id, $name, $desc) {
        global $conn;
        mysqli_query($conn, "UPDATE items SET name='$name', description='$desc' WHERE id=$id");
    }

    public static function delete($id) {
        global $conn;
        mysqli_query($conn, "DELETE FROM items WHERE id=$id");
    }
}
