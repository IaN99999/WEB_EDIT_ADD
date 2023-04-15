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
                        <a class="nav-link" href="tambahproses.php">Add proses</a> </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="tambahjadwal.php">Add jadwal sidang</a> </li>
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
    <form action="addproses.php" method="post">
        <label for="name" style="color:white">Id Klien:</label>
        <br>
        <input type="number" id="id_klien" name="id_klien" required><br><br>
        <label for="name" style="color:white">Konsultasi:</label>
        <br>
        <input type="text" id="konsultasi" name="konsultasi" required><br><br>
        <label for="name" style="color:white">Pembuatan gugatan:</label>
        <br>
        <input type="text" id="pembuatan_gugatan" name="pembuatan_gugatan" required><br><br>
        <label for="name" style="color:white">Review klien:</label>
        <br>
        <input type="text" id="review_klien" name="review_klien" required><br><br>
        <label for="name" style="color:white">Revisi klien:</label>
        <br>
        <input type="text" id="revisi_klien" name="revisi_klien" required><br><br>
        <label for="name" style="color:white">Review Kepala Divisi Litigasi:</label>
        <br>
        <input type="text" id="Review_Kepala_Divisi_Litigasi" name="Review_Kepala_Divisi_Litigasi" required><br><br>
        <label for="name" style="color:white">Revisi Kepala Divisi Litigasi:</label>
        <br>
        <input type="text" id="Revisi_Kepala_Divisi_Litigasi" name="Revisi_Kepala_Divisi_Litigasi" required><br><br>
        <label for="name" style="color:white">Persetujuan Gugatan:</label>
        <br>
        <input type="text" id="persetujuan_gugatan" name="persetujuan_gugatan" required><br><br>
        <label for="name" style="color:white">Pendaftaran Perkara:</label>
        <br>
        <input type="text" id="pendaftaran_perkara" name="pendaftaran_perkara" required><br><br>
        <input type="submit" style="margin-left: 120px"value="Submit">
    </form>
</div>
</body>
</html>
