<?php
require "connection.php";
$sql = "SELECT id_klien, klasifikasi_perkara, pengadilan, misili_pengadilan, no_perkara, tanggal, agenda FROM data_klien";

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
