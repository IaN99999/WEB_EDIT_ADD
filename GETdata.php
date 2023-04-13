<?php
require "connect.php";
$sql = "SELECT id_klien, klasifikasi_perkara, pengadilan, tempat_pengadilan, nomor_perkara, tanggal, agenda FROM kasus";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data dari setiap baris
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data = array();
}
?> 
