<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "kantin";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
} catch (PDOException $e) {
    echo 'koneksi gagal' . $e->getMessage();
}

$view = 'fungsi/view/view.php';
