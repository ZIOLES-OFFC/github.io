<?php
session_start();
include "config.php";

if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: login.php");
    exit();
}

$result = $conn->query("SELECT * FROM orders");

echo "<h2>Daftar Pesanan</h2>";
echo "<table border='1'><tr><th>ID</th><th>User</th><th>Layanan</th><th>Jumlah</th><th>Status</th><th>Aksi</th></tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>{$row['id']}</td>
        <td>{$row['user_id']}</td>
        <td>{$row['layanan']}</td>
        <td>{$row['jumlah']}</td>
        <td>{$row['status']}</td>
        <td><a href='proses.php?id={$row['id']}'>Proses</a></td>
    </tr>";
}

echo "</table>";
?>
