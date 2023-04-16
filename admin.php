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
<style>
    /* CSS untuk modal */
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.4);
    }

    .modal-content {
        background-color: #fefefe;
        margin: 10% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 80%;
    }

    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }
</style>

<body style="background-color:#191a1b">
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

    <div class="container-fluid" style="padding-top:25px">
        <div class="table-responsive">

            <table class="table table-bordered">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Id Klien</th>
                        <th style="color:white">Klasifikasi Perkara</th>
                        <th style="color:white">Pengadilan</th>
                        <th style="color:white">Tempat Pengadilan</th>
                        <th style="color:white">No.Perkara</th>
                        <th style="color:white">Tanggal</th>
                        <th style="color:white">Agenda</th>
                        <th style="color:white">Link</th>
                        <th style="color:white">Edit Data</th>
                    </tr>
                </thead>
                <tbody style="background-color:black">
                    <?php
                    // Mengecek apakah ada data atau tidak
                    if (!empty($data)) {
                        // Output data dari setiap baris
                        foreach ($data as $row) {
                            echo "<tr>";
                            echo "<td style='color:white'>" . $row["id_klien"] . "</td>";
                            echo "<td style='color:white'>" . $row["klasifikasi_perkara"] . "</td>";
                            echo "<td style='color:white'>" . $row["pengadilan"] . "</td>";
                            echo "<td style='color:white'>" . $row["misili_pengadilan"] . "</td>";
                            echo "<td style='color:white'>" . $row["no_perkara"] . "</td>";
                            echo "<td style='color:white'>" . $row["tanggal"] . "</td>";
                            echo "<td style='color:white'>" . $row["agenda"] . "</td>";
                            echo "<td style='color:white'><button class='link btn-success' data-id='" . $row['id_klien'] . "'>detail</button></td>";
                            echo "<td><button class='tombol btn-success' data-id='" . $row['id_klien'] . "'>edit</button></td>";
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

    <!-- Button untuk memunculkan modal -->

    <!-- Modal untuk mengedit data -->
    <div class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <br>
            <h2>Edit Data</h2>
            <br>
            <form id="editForm">
                <input type="hidden" id="editId" name="id">
                <label for="editKlasifikasi">Klasifikasi Perkara:</label>
                <br>
                <input type="text" id="editKlasifikasi" name="klasifikasi">
                <br> <br>
                <label for="editPengadilan">Pengadilan:</label>
                <br>
                <input type="text" id="editPengadilan" name="pengadilan">
                <br><br>
                <label for="editMisili">Misili Pengadilan:</label>
                <br>
                <input type="text" id="editMisili" name="misili">
                <br><br>
                <label for="editNoPerkara">No. Perkara:</label>
                <br>
                <input type="text" id="editNoPerkara" name="no_perkara">
                <br><br>
                <label for="editTanggal">Tanggal:</label>
                <br>
                <input type="date" id="editTanggal" name="tanggal">
                <br><br>
                <label for="editAgenda">Agenda:</label>
                <br>
                <input type="text" id="editAgenda" name="agenda">
                <br><br>
                <!-- <label for="editLink">Link:</label>
                <br>
                <input type="text" id="editLink" name="link">
                <br><br> -->
                <input type="submit" value="Simpan">
                <br><br>
            </form>
        </div>
    </div>
</body>
<script>
    // Ambil elemen-elemen yang diperlukan
    // const editBtn = document.querySelector('#editBtn');
    const modal = document.querySelector('.modal');
    const closeBtn = document.querySelector('.close');
    const editForm = document.querySelector('#editForm');
    const editId = document.querySelector('#editId');
    const editKlasifikasi = document.querySelector('#editKlasifikasi');
    const editPengadilan = document.querySelector('#editPengadilan');
    const editMisili = document.querySelector('#editMisili');
    const editNoPerkara = document.querySelector('#editNoPerkara');
    const editTanggal = document.querySelector('#editTanggal');
    const editAgenda = document.querySelector('#editAgenda');
    const editLink =" ";

    // Ketika tombol edit di klik, tampilkan modal
    const editButtons = document.querySelectorAll('.tombol');
    const details = document.querySelectorAll('.link');
    details.forEach((button) => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            // Ambil data dari server berdasarkan id
            console.log("masuk ke detail");
            console.log(id);
            fetch(`get_data.php?id_klien=${id}`)
                .then((response) => response.json())
                .then((data) => {
                    // Arahkan pengguna ke halaman baru dengan data yang diambil dari server
                    window.location.href = `detailkasus.php?from=admin&id_klien=${id}&klasifikasi_perkara=${data.klasifikasi_perkara}&pengadilan=${data.pengadilan}&misili_pengadilan=${data.misili_pengadilan}&no_perkara=${data.no_perkara}&tanggal=${data.tanggal}&agenda=${data.agenda}&link=${data.link}`;
                })
                .catch((error) => console.error(error));
        });
    });

    editButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            // Ambil data dari server berdasarkan id
            console.log(id);
            fetch(`get_data.php?id_klien=${id}`)
                .then((response) => response.json())
                .then((data) => {
                    // Isi nilai input form edit dengan data yang diambil dari server
                    editId.value = data.id_klien;
                    editKlasifikasi.value = data.Klasifikasi_perkara;
                    editPengadilan.value = data.pengadilan;
                    editMisili.value = data.misili_pengadilan;
                    editNoPerkara.value = data.no_perkara;
                    editTanggal.value = data.tanggal;
                    editAgenda.value = data.agenda;
                    editLink.value = data.link;
                    // Tampilkan modal edit
                    modal.style.display = 'block';
                })
                .catch((error) => console.error(error));
        });
    });


    closeBtn.addEventListener('click', () => {
        modal.style.display = 'none';
    });

    // Ketika user mengklik diluar modal, sembunyikan modal
    window.addEventListener('click', (event) => {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });

    // Ketika form edit di submit, lakukan AJAX request untuk mengupdate data di database
    editForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const id = editId.value;
        const klasifikasi = editKlasifikasi.value;
        const pengadilan = editPengadilan.value;
        const misili = editMisili.value;
        const noPerkara = editNoPerkara.value;
        const tanggal = editTanggal.value;
        const agenda = editAgenda.value;
        const link = editLink.value;
        console.log(link);
        fetch('update_data.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id_klien: id,
                    klasifikasi_perkara: klasifikasi,
                    pengadilan: pengadilan,
                    misili_pengadilan: misili,
                    no_perkara: noPerkara,
                    tanggal: tanggal,
                    agenda: agenda,
                    link: link,
                }),
            })
            .then((response) => response.json())
            .then((data) => {
                console.log(data);
                // Sembunyikan modal
                modal.style.display = 'none';
                console.log(id);
                // Lakukan reload halaman agar data yang ditampilkan terupdate
                location.reload();
            })
            .catch((error) => console.error(error));
    });
</script>

</html>