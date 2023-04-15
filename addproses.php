<?php
require "connection.php";
// Menerima data dari form input
$id_klien = $_POST['id_klien'];
$konsultasi = $_POST['konsultasi'];
$pembuatan_gugatan = $_POST['pembuatan_gugatan'];
$review_klien = $_POST['review_klien'];
$revisi_klien = $_POST['revisi_klien'];
$Review_Kepala_Divisi_Litigasi = $_POST['Review_Kepala_Divisi_Litigasi'];
$Revisi_Kepala_Divisi_Litigasi = $_POST['Revisi_Kepala_Divisi_Litigasi'];
$persetujuan_gugatan = $_POST['persetujuan_gugatan'];
$pendaftaran_perkara = $_POST['pendaftaran_perkara'];

// Menambahkan data ke dalam tabel "proses"
  // membuat query SQL untuk memasukkan data ke dalam tabel jadwal_sidang
  $sql = "INSERT INTO jadwal_sidang (id_klien, tanggal_sidang, agenda_sidang, lawyer, keterangan) VALUES ('$id_klien', '$tanggal_sidang', '$agenda_sidang', '$lawyer', '$keterangan')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil ditambahkan.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);

?>