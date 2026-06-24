<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "piscok_kota_jalur";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>