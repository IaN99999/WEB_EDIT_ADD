<?php
// Panggil koneksi ke database
require 'connection.php';

// Ambil data yang dikirimkan melalui AJAX request
$data = json_decode(file_get_contents('php://input'), true);

// Lakukan query untuk mengupdate data
$query = "UPDATE data_proses SET
          tahapan = '".$data['tahapan']."',
          PIC = '".$data['PIC']."'
          WHERE id_klien = '".$data['id_klien']."' AND id_proses= '".$data['id_proses']."'";
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
