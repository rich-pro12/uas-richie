<?php
$conn = mysqli_connect("localhost", "root", "", "uas_app");

if (!$conn) {
    die("Koneksi database gagal");
}
