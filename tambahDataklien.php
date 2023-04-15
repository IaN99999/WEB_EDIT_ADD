<!DOCTYPE html>
<?php
// Memasukkan session.php untuk memeriksa login
require_once 'login.php';
?>
<html>
<head>
    <title>Admin Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body style="background-color:#191a1b">

<nav class="navbar navbar-expand-md navbar-light flex-md-column">
        <div class="container-fluid">
            <div class="navbar-brand"><img src="image/logo.png" alt=""></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambahadmin.php">Add admin`</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambahDataKlien.php">Add data klien`</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambahproses.php">tambah proses</a> </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="tambahjadwal.php">tambah jadwal sidang</a> </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
    <h1 style="padding-top:35px; color:white">Input Data Klien</h1>
    <br>
    <form action="addDataKlien.php" method="post">
        <label for="name" style="color:white">Id Klien:</label>
        <br>
        <input type="number" id="id_klien" name="id_klien" required><br><br>
        <label for="klasifikasi_perkara" style="color:white">Klasifikasi Perkara:</label>
        <br>
        <input type="text" id="klasifikasi_perkara" name="klasifikasi_perkara" required><br><br>
        <label for="pengadilan" style="color:white">Pengadilan:</label>
        <br>
        <input type="text" id="pengadilan" name="pengadilan" required><br><br>
        <label for="misili_pengadilan" style="color:white">Domisili Pengadilan:</label>
        <br>
        <input type="text" id="misili_pengadilan" name="misili_pengadilan" required><br><br>
        <label for="no_perkara" style="color:white">Nomor Perkara:</label>
        <br>
        <input type="number" id="no_perkara" name="no_perkara" required><br><br>
        <label for="tanggal" style="color:white">Tanggal:</label>
        <br>
        <input type="date" style="padding-left: 48px"id="tanggal" name="tanggal" required><br><br>
        <label for="agenda" style="color:white">Agenda:</label>
        <br>
        <input type="text" id="agenda" name="agenda" required><br><br>
        <input type="submit" style="margin-left: 120px"value="Submit">
    </form>
</div>
</body>
</html>
