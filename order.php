<?php
session_start();
include "config.php";

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION["user_id"];
    $layanan = $_POST["layanan"];
    $jumlah  = $_POST["jumlah"];
    
    $query = "INSERT INTO orders (user_id, layanan, jumlah) VALUES ('$user_id', '$layanan', '$jumlah')";
    if ($conn->query($query)) {
        echo "Pesanan berhasil dibuat!";
    } else {
        echo "Gagal memesan!";
    }
}
?>

<form method="POST">
    <select name="layanan">
        <option value="Instagram Followers">Instagram Followers</option>
        <option value="YouTube Subscribers">YouTube Subscribers</option>
        <option value="TikTok Views">TikTok Views</option>
    </select>
    <input type="number" name="jumlah" placeholder="Jumlah" required>
    <button type="submit">Pesan</button>
</form>
