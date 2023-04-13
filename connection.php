<?php
$host = "localhost"; //nama host
$user = "root"; //username untuk database
$pass = ""; //password untuk database
$dbname = "novita"; //nama database yang ingin digunakan

// membuat koneksi ke database
$conn = mysqli_connect($host, $user, $pass, $dbname);

// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
