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


// Menambahkan data ke dalam tabel "data_proses"
$sql = "INSERT INTO data_proses (id_proses,id_klien, tahapan, PIC)
VALUES ('1','$id_klien', 'Konsultasi', '$konsultasi'),
       ('2','$id_klien', 'Pembuatan Gugatan', '$pembuatan_gugatan'),
       ('3','$id_klien', 'Review Klien', '$review_klien'),
       ('4','$id_klien', 'Revisi Klien', '$revisi_klien'),
       ('5','$id_klien', 'Review Kepala Divisi Litigasi', '$Review_Kepala_Divisi_Litigasi'),
       ('6','$id_klien', 'Revisi Kepala Divisi Litigasi', '$Revisi_Kepala_Divisi_Litigasi'),
       ('7','$id_klien', 'Persetujuan Gugatan', '$persetujuan_gugatan'),
       ('8','$id_klien', 'Pendaftaran Perkara', '$pendaftaran_perkara')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil ditambahkan.";
  header("Location: tambahproses.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);

?>