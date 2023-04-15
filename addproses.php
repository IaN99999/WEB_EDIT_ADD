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
$sql = "INSERT INTO proses (id_klien, tahapan, PIC)
VALUES ('$id_klien', 'Konsultasi', '$konsultasi'),
       ('$id_klien', 'Pembuatan Gugatan', '$pembuatan_gugatan'),
       ('$id_klien', 'Review Klien', '$review_klien'),
       ('$id_klien', 'Revisi Klien', '$revisi_klien'),
       ('$id_klien', 'Review Kepala Divisi Litigasi', '$Review_Kepala_Divisi_Litigasi'),
       ('$id_klien', 'Revisi Kepala Divisi Litigasi', '$Revisi_Kepala_Divisi_Litigasi'),
       ('$id_klien', 'Persetujuan Gugatan', '$persetujuan_gugatan'),
       ('$id_klien', 'Pendaftaran Perkara', '$pendaftaran_perkara')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil ditambahkan.";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);

?>