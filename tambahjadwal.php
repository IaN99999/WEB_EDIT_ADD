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
    <h1 style="padding-top:35px; color:white">Input Jadwal</h1>
    <br>
    <form action="addjadwal.php" method="post">
        <label for="name" style="color:white">Id Klien:</label>
        <br>
        <input type="number" id="id_klien" name="id_klien" required><br><br>
        <label for="name" style="color:white">Tanggal sidang:</label>
        <br>
        <input type="date" style="padding-left: 48px" id="tanggal_sidang" name="tanggal_sidang" required><br><br>
        <label for="name" style="color:white">Agenda sidang:</label>
        <br>
        <input type="text" id="agenda_sidang" name="agenda_sidang" required><br><br>
        <label for="name" style="color:white">Lawyer:</label>
        <br>
        <input type="text" id="lawyer" name="lawyer" required><br><br>
        <label for="name" style="color:white">Keterangan:</label>
        <br>
        <input type="text" id="keterangan" name="keterangan" required><br><br>
        <input type="submit" style="margin-left: 120px"value="Submit">
    </form>
</div>
</body>
</html>
