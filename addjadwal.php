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
  // membuat query SQL untuk memasukkan data ke dalam tabel jadwal_sidang
  $sql = "INSERT INTO jadwal_sidang (id_klien, tanggal_sidang, agenda_sidang, lawyer, keterangan) VALUES ('$id_klien', '$tanggal_sidang', '$agenda_sidang', '$lawyer', '$keterangan')";

if (mysqli_query($conn, $sql)) {
  echo "Data berhasil ditambahkan.";
  header("Location: tambahjadwal.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);

?>