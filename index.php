<!DOCTYPE html>
<html>
<head>
    <title>Index Page</title>
</head>
<body>
    <h1>Ini adalah halaman index</h1>

    <?php
        // Memanggil file a.php
        include 'GETdata.php';
    ?>

    <table>
        <thead>
            <tr>
                <th>ID Klien</th>
                <th>Klasifikasi Perkara</th>
                <th>Pengadilan</th>
                <th>Tempat Pengadilan</th>
                <th>Nomor Perkara</th>
                <th>Tanggal</th>
                <th>Agenda</th>
                <th>link</th>
            </tr>
        </thead>
        <tbody>
            <?php
                // Mengecek apakah ada data atau tidak
                if (!empty($data)) {
                    // Output data dari setiap baris
                    foreach ($data as $row) {
                        echo "<tr>";
                        echo "<td>".$row["id_klien"]."</td>";
                        echo "<td>".$row["klasifikasi_perkara"]."</td>";
                        echo "<td>".$row["pengadilan"]."</td>";
                        echo "<td>".$row["misili_pengadilan"]."</td>";
                        echo "<td>".$row["no_perkara"]."</td>";
                        echo "<td>".$row["tanggal"]."</td>";
                        echo "<td>".$row["agenda"]."</td>";
                        echo "<td><a href=".$row["link"].">Detail</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                }
            ?>
        </tbody>
    </table>
</body>
</html>
