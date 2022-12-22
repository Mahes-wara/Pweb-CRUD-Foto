<?php
$host = "localhost"; // Nama hostnya
$username = "hesh"; // Username
$password = "kopi"; // Password (Isi jika menggunakan password)
$database = "crud_upload"; // Nama databasenya
// Koneksi ke MySQL dengan PDO
$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);
?>