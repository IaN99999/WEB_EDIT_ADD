<?php
// Panggil koneksi ke database
require 'connection.php';

// Ambil data yang dikirimkan melalui AJAX request
$data = json_decode(file_get_contents('php://input'), true);

// Lakukan query untuk mengupdate data
$query = "UPDATE data_klien SET
          klasifikasi_perkara = '".$data['klasifikasi_perkara']."',
          pengadilan = '".$data['pengadilan']."',
          misili_pengadilan = '".$data['misili_pengadilan']."',
          no_perkara = '".$data['no_perkara']."',
          tanggal = '".$data['tanggal']."',
          agenda = '".$data['agenda']."',
          link = ''
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
