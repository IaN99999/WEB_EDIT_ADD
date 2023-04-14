<!DOCTYPE html>
<?php
// Memasukkan session.php untuk memeriksa login
require_once 'login.php';
?>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>
    <h1>Input Data</h1>
    <form action="addDataKlien.php" method="post">
        <label for="name">Id Klien:</label>
        <input type="number" id="id_klien" name="id_klien" required><br><br>
        <label for="klasifikasi_perkara">klasifikasi perkara:</label>
        <input type="text" id="klasifikasi_perkara" name="klasifikasi_perkara" required><br><br>
        <label for="pengadilan">pengadilan:</label>
        <input type="text" id="pengadilan" name="pengadilan" required><br><br>
        <label for="misili_pengadilan">misili pengadilan:</label>
        <input type="text" id="misili_pengadilan" name="misili_pengadilan" required><br><br>
        <label for="no_perkara">nomor perkara:</label>
        <input type="number" id="no_perkara" name="no_perkara" required><br><br>
        <label for="tanggal">tanggal:</label>
        <input type="date" id="tanggal" name="tanggal" required><br><br>
        <label for="agenda">agenda:</label>
        <input type="text" id="agenda" name="agenda" required><br><br>
        <label for="link">link:</label>
        <input type="text" id="link" name="link" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
