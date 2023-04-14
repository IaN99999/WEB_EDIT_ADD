<?php
require "connection.php";
// Mengambil data dari form
$id_klien = $_POST["id_klien"];
$klasifikasi_perkara = $_POST["klasifikasi_perkara"];
$pengadilan = $_POST["pengadilan"];
$misili_pengadilan = $_POST["misili_pengadilan"];
$no_perkara = $_POST["no_perkara"];
$tanggal = $_POST["tanggal"];
$agenda = $_POST["agenda"];
$link = $_POST["link"];

// Mengubah format tanggal menjadi YYYY-MM-DD
$tanggal = date("Y-m-d", strtotime($tanggal));

// Membuat query SQL untuk memasukkan data ke database
$sql = "INSERT INTO data_klien (id_klien, klasifikasi_perkara, pengadilan, misili_pengadilan, no_perkara, tanggal, agenda, link) VALUES ('$id_klien', '$klasifikasi_perkara', '$pengadilan', '$misili_pengadilan', '$no_perkara', '$tanggal', '$agenda', '$link')";

// Menjalankan query SQL dan memeriksa hasilnya
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dimasukkan ke database";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Menutup koneksi
mysqli_close($conn);
?>