<?php
$host = "localhost";
$user = "root";  // Ganti sesuai username database Anda
$pass = "";       // Ganti jika ada password
$db   = "smm_panel";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
