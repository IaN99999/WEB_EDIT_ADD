<?php
require "connection.php";
// Mengambil data dari form
$username = $_POST["username"];
$password = $_POST["password"];

// Mengubah format tanggal menjadi YYYY-MM-DD
$tanggal = date("Y-m-d", strtotime($tanggal));

// Membuat query SQL untuk memasukkan data ke database
$sql = "INSERT INTO data_klien (username, password) VALUES ('$username', '$password')";

// Menjalankan query SQL dan memeriksa hasilnya
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke database";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>

