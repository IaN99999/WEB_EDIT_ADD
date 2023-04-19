<?php
// Koneksi database
require 'connection.php';

// Menghapus data dari tabel a
$id = $_POST['id'];
$query_a = "DELETE FROM data_klien WHERE id_klien = '$id'";
$result_a = mysqli_query($conn, $query_a);

// Menghapus data dari tabel b
$query_b = "DELETE FROM data_proses WHERE id_klien = '$id'";
$result_b = mysqli_query($conn, $query_b);

// Menghapus data dari tabel c
$query_c = "DELETE FROM jadwal_sidang WHERE id_klien = '$id'";
$result_c = mysqli_query($conn, $query_c);

if ($result_a && $result_b && $result_c) {
    echo "success";
} else {
    echo "error";
}
mysqli_close($conn);
?>
