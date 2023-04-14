<!DOCTYPE html>
<?php
include('login.php');
?>
<html lang="en">

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Familaw admin</title>
</head>

<body>
<?php
// Memanggil file a.php
include 'GETdata.php';
?>
<nav class="navbar navbar-expand-md navbar-light flex-md-column">
        <div class="container-fluid">
            <div class="navbar-brand"><img src="image/logo.png" alt=""></div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambahadmin.php">Add admin`</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tambahDataKlien.php">Add data klien`</a>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="padding-top:25px">
        <div class="table-responsive">

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="background-color:black; color:white">Id Klien</th>
                        <th style="background-color:black; color:white">Klasifikasi Perkara</th>
                        <th style="background-color:black; color:white">Pengadilan</th>
                        <th style="background-color:black; color:white">Tempat Pengadilan</th>
                        <th style="background-color:black; color:white">No.Perkara</th>
                        <th style="background-color:black; color:white">Tanggal</th>
                        <th style="background-color:black; color:white">Agenda</th>
                        <th style="background-color:black; color:white">Link</th>
                        <th style="background-color:black; color:white">Edit Data</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Mengecek apakah ada data atau tidak
                    if (!empty($data)) {
                        // Output data dari setiap baris
                        foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td>" . $row["id_klien"] . "</td>";
                            echo "<td>" . $row["klasifikasi_perkara"] . "</td>";
                            echo "<td>" . $row["pengadilan"] . "</td>";
                            echo "<td>" . $row["misili_pengadilan"] . "</td>";
                            echo "<td>" . $row["no_perkara"] . "</td>";
                            echo "<td>" . $row["tanggal"] . "</td>";
                            echo "<td>" . $row["agenda"] . "</td>";
                            echo "<td><a href=" . $row["link"] . ">Detail</a></td>";
                            echo "<td><button type='button' class='btn btn-success' id='edit'>edit</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>

            </table>

        </div>

    </div>
    
</body>

</html>