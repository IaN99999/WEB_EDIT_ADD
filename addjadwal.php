<?php
require "connection.php";
// Menerima data dari form input
$id_klien = $_POST['id_klien'];
$tanggal_sidang = $_POST['tanggal_sidang'];
$agenda_sidang = $_POST['agenda_sidang'];
$lawyer = $_POST['lawyer'];
$keterangan = $_POST['keterangan'];

$tanggal_sidang = date("Y-m-d", strtotime($tanggal_sidang));

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