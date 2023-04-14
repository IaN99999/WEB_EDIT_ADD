<?php
require "connection.php";
// Ambil keyword pencarian dari parameter GET
$keyword = mysqli_real_escape_string($conn, $_GET['keyword']);

// Query mencari data dengan keyword tertentu
if (strlen($keyword) > 0) {
    $query = "SELECT * FROM data_klien WHERE 
    id_klien LIKE '%$keyword%' OR 
    klasifikasi_perkara LIKE '%$keyword%' OR 
    pengadilan LIKE '%$keyword%' OR 
    misili_pengadilan LIKE '%$keyword%' OR 
    no_perkara LIKE '%$keyword%' OR 
    tanggal LIKE '%$keyword%' OR 
    agenda LIKE '%$keyword%' OR 
    link LIKE '%$keyword%'";
}
else{
    $query = "SELECT * FROM data_klien";
}


$result = mysqli_query($conn, $query);

if (!$result) {
  die("Query gagal: " . mysqli_error($conn));
}

// Siapkan array untuk menampung hasil pencarian
$searchResults = array();

// Ambil semua data hasil pencarian dan masukkan ke dalam array
while ($row = mysqli_fetch_assoc($result)) {
  $searchResults[] = $row;
}

// Return hasil pencarian dalam format JSON
header('Content-Type: application/json');
echo json_encode($searchResults);

// Tutup koneksi ke database
