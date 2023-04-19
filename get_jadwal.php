<?php
require "connection.php";
// Ambil id_klien dari parameter URL
$id = $_GET['id_klien'];

// Query untuk mengambil data klien berdasarkan id_klien
$query = "SELECT * FROM jadwal_sidang WHERE id_klien = $id";
$result = mysqli_query($conn, $query);

// Cek apakah query berhasil dijalankan
if (!$result) {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
    exit();
}

// Ambil data dari hasil query
$data = mysqli_fetch_assoc($result);

// Konversi data ke format JSON dan kirim ke client
header('Content-Type: application/json');
echo json_encode($data);

// Tutup koneksi database
mysqli_close($conn);
?>
