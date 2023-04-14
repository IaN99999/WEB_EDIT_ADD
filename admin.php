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
                        <a class="nav-link" href="logout.php">Logout</a>
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
                            echo "<td><button class='tombol' data-id='" . $row['id_klien'] . "'>Edit Data</button></td>";
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
            <h2>Edit Data</h2>
            <form id="editForm">
                <input type="hidden" id="editId" name="id">
                <label for="editKlasifikasi">Klasifikasi Perkara:</label>
                <input type="text" id="editKlasifikasi" name="klasifikasi">
                <label for="editPengadilan">Pengadilan:</label>
                <input type="text" id="editPengadilan" name="pengadilan">
                <label for="editMisili">Misili Pengadilan:</label>
                <input type="text" id="editMisili" name="misili">
                <label for="editNoPerkara">No. Perkara:</label>
                <input type="text" id="editNoPerkara" name="no_perkara">
                <label for="editTanggal">Tanggal:</label>
                <input type="date" id="editTanggal" name="tanggal">
                <label for="editAgenda">Agenda:</label>
                <input type="text" id="editAgenda" name="agenda">
                <label for="editLink">Link:</label>
                <input type="text" id="editLink" name="link">
                <input type="submit" value="Simpan">
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
    const editLink = document.querySelector('#editLink');

    // Ketika tombol edit di klik, tampilkan modal
    const editButtons = document.querySelectorAll('.tombol');

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
                    editKlasifikasi.value = data.klasifikasi_perkara;
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