<?php
// Panggil koneksi ke database
require 'connection.php';

// Ambil data yang dikirimkan melalui AJAX request
$data = json_decode(file_get_contents('php://input'), true);

// Lakukan query untuk mengupdate data
$query = "UPDATE jadwal_sidang SET
          tanggal_sidang = '".$data['tanggal_sidang']."',
          agenda_sidang = '".$data['agenda_sidang']."',
          lawyer = '".$data['lawyer']."',
          keterangan = '".$data['keterangan']."'
          WHERE id_klien = '".$data['id_klien']."'";
$result = mysqli_query($conn, $query);

// Mengirimkan respon ke client
if ($result) {
    $response = ['success' => true, 'message' => 'Data berhasil diupdate'];
    echo json_encode($response);
} else {
    $response = ['success' => false, 'message' => 'Data gagal diupdate'];
    echo json_encode($response);
}
?>
