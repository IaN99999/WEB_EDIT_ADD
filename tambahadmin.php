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

<nav class="navbar navbar-expand-md navbar-light flex-md-column" style="border-bottom: solid;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center">
                        <div class="navbar-brand"><img src="image/logo.png" alt=""></div>
                        <div class="ms-auto">
                            <h3 style="padding-top: 14px;font-family: fangsong;">SISTEM INFORMASI KEMAJUAN KLIEN</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
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
                        <a class="nav-link" href="tambahproses.php">Add proses</a>
                    </li>
                    <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link" href="tambahjadwal.php">Add jadwal sidang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h1 style="padding-top:35px; color:white">Input Data Admin</h1>

        <form action="addDataKlien.php" method="post">
            <br><br>
            <label for="username" style="color:white">Username:</label>
            <input type="text" id="username" name="username" required style="margin-left: 10px"><br><br>
            <br>
            <label for="password" style="color:white">Password:</label>
            <input type="password" id="password" name="password" required style="margin-left: 11px"><br><br>
            <input type="submit" style="margin-left: 206px" value="Submit">
        </form>
    </div>

</body>

</html>