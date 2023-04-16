<!DOCTYPE html>
<html lang="en">
<?php
require "connection.php";
$id_klien = $_GET['id_klien'];
$klasifikasi_perkara = $_GET['klasifikasi_perkara'];
$pengadilan = $_GET['pengadilan'];
$misili_pengadilan = $_GET['misili_pengadilan'];
$no_perkara = $_GET['no_perkara'];
$tanggal = $_GET['tanggal'];
$agenda = $_GET['agenda'];
$link = $_GET['link'];

// Mengeksekusi query SQL untuk mengambil data dari tabel
$sql = "SELECT * FROM data_proses WHERE id_klien = $id_klien";
$result = $conn->query($sql);
if (mysqli_num_rows($result) > 0) {
    // Output data dari setiap baris
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
} else {
    $data = array();
}
// Mengeksekusi query SQL untuk mengambil data dari tabel
$sqll = "SELECT * FROM jadwal_sidang WHERE id_klien = $id_klien";
$resultt = $conn->query($sqll);
if (mysqli_num_rows($resultt) > 0) {
    // Output data dari setiap baris
    while ($row = mysqli_fetch_assoc($resultt)) {
        $dataa[] = $row;
    }
} else {
    $dataa = array();
}


?>

<head>
    <title>detail page</title>
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
                        <a class="nav-link" href="<?php echo $_GET['from']; ?>.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="padding-top:25px">
        <div class="table-responsive">
            <h2 style="color:white">Data Umum</h2>
            <table class="table table-bordered">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Id klien</th>
                        <th style="color:white">Pengadilan</th>
                        <th style="color:white">Domisili pengadilan</th>
                        <th style="color:white">Nomor perkara</th>
                        <th style="color:white">Tanggal</th>
                        <th style="color:white">Agenda</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            echo "<tr>";
                            echo "<td style='color:white'>" . $id_klien . "</td>";
                            echo "<td style='color:white'>" . $pengadilan . "</td>";
                            echo "<td style='color:white'>" . $misili_pengadilan . "</td>";
                            echo "<td style='color:white'>" . $no_perkara . "</td>";
                            echo "<td style='color:white'>" . $tanggal . "</td>";
                            echo "<td style='color:white'>" . $agenda . "</td>";
                            echo "</tr>";
                    ?>
                </tbody>
            </table>
            <br>
            <h2 style="color:white">Proses</h2>
            <table class="table table-bordered">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Tahapan</th>
                        <th style="color:white">PIC</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Mengecek apakah ada data atau tidak
                    if (!empty($data)) {
                        // Output data dari setiap baris
                        foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td style='color:white'>" . $row["tahapan"] . "</td>";
                            echo "<td style='color:white'>" . $row["PIC"] . "</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <h2 style="color:white">Jadwal Sidang</h2>
            <table class="table table-bordered">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Tanggal sidang</th>
                        <th style="color:white">Agenda sidang</th>
                        <th style="color:white">Lawyer</th>
                        <th style="color:white">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    // Mengecek apakah ada data atau tidak
                    if (!empty($dataa)) {
                        // Output data dari setiap baris
                        foreach ($dataa as $row) {
                            echo "<tr>";
                            echo "<td style='color:white'>" . $row["tanggal_sidang"] . "</td>";
                            echo "<td style='color:white'>" . $row["agenda_sidang"] . "</td>";
                            echo "<td style='color:white'>" . $row["lawyer"] . "</td>";
                            echo "<td style='color:white'>" . $row["keterangan"] . "</td>";
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