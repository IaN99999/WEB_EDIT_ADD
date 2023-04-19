<!DOCTYPE html>
<html lang="en">
<?php
require "connection.php";

$id_klien = $_GET['id_klien'];

$sqql = "SELECT * FROM data_klien WHERE id_klien = $id_klien";
$resullt = $conn->query($sqql);
if (mysqli_num_rows($resullt) > 0) {
    // Output data dari setiap baris
    while ($row = mysqli_fetch_assoc($resullt)) {
        $ddata[] = $row;
    }
} else {
    $ddata = array();
}

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

        .modalproses {
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

        .modaljadwal {
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
</head>

<body style="background-color:#191a1b">

    <nav class="navbar navbar-expand-md navbar-light flex-md-column">
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
                        <a class="nav-link" href="<?php echo $_GET['from']; ?>.php">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid" style="padding-top:25px">
        <div class="table-responsive">
            <h2 style="color:white">Data Umum</h2>
            <table class="table table-bordered" id="dataumum">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Id klien</th>
                        <th style="color:white">Klasifikasi Perkara</th>
                        <th style="color:white">Pengadilan</th>
                        <th style="color:white">Domisili pengadilan</th>
                        <th style="color:white">Nomor perkara</th>
                        <th style="color:white">Tanggal</th>
                        <th style="color:white">Agenda</th>
                        <th style="color:white">Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!empty($ddata)) {
                        // Output data dari setiap baris
                        foreach ($ddata as $row) {
                            echo "<tr>";
                            echo "<td style='color:white'>" . $row["id_klien"] . "</td>";
                            echo "<td style='color:white'>" . $row["Klasifikasi_perkara"] . "</td>";
                            echo "<td style='color:white'>" . $row["pengadilan"] . "</td>";
                            echo "<td style='color:white'>" . $row["misili_pengadilan"] . "</td>";
                            echo "<td style='color:white'>" . $row["no_perkara"] . "</td>";
                            echo "<td style='color:white'>" . $row["tanggal"] . "</td>";
                            echo "<td style='color:white'>" . $row["agenda"] . "</td>";
                            echo "<td><button class='tombol btn-success' data-id='" . $row["id_klien"] . "'>edit</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <h2 style="color:white">Proses</h2>
            <table class="table table-bordered" id="proses">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Tahapan</th>
                        <th style="color:white">PIC</th>
                        <th style="color:white">Edit</th>
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
                            echo "<td><button class='bproses btn-success' data-id='" . $row['id_klien'] . "'>edit</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>
            </table>
            <h2 style="color:white">Jadwal Sidang</h2>
            <table class="table table-bordered" id="jadwal">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Tanggal sidang</th>
                        <th style="color:white">Agenda sidang</th>
                        <th style="color:white">Lawyer</th>
                        <th style="color:white">Keterangan</th>
                        <th style="color:white">Edit</th>
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
                            echo "<td><button class='bjadwal btn-success' data-id='" . $row['id_klien'] . "'>edit</button></td>";
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
    <!-- modal proses -->
    <div class="modalproses">
        <div class="modal-content">
            <span class="closeproses">&times;</span>
            <br>
            <h2>Edit Data</h2>
            <br>
            <form id="editprosesForm">
                <input type="hidden" id="editId" name="id">
                <label for="editTahapan">Tahapan:</label>
                <br>
                <input type="text" id="editTahapan" name="tahapan">
                <br> <br>
                <label for="editPIC">PIC:</label>
                <br>
                <input type="text" id="editPIC" name="PIC">
                <br><br>
                <input type="submit" value="Simpan">
                <br><br>
            </form>
        </div>
    </div>
    <!-- Modal jadwal -->
    <div class="modaljadwal">
        <div class="modal-content">
            <span class="closejadwal">&times;</span>
            <br>
            <h2>Edit Data</h2>
            <br>
            <form id="editjadwalForm">
                <input type="hidden" id="editId" name="id">
                <label for="edittanggalsidang">tanggal sidang:</label>
                <br>
                <input type="date" id="edittanggalsidang" name="tanggalsidang">
                <br> <br>
                <label for="editagendasidang">agenda sidang:</label>
                <br>
                <input type="text" id="editagendasidang" name="agendasidang">
                <br><br>
                <label for="editlawyer">lawyer:</label>
                <br>
                <input type="text" id="editlawyer" name="lawyer">
                <br><br>
                <label for="editketerangan">keterangan:</label>
                <br>
                <input type="text" id="editketerangan" name="keterangan">
                <br><br>
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
    const editButtons = document.querySelectorAll('.tombol');
    const editLink = " ";
    //ambil element untuk proses modal  
    const editprosesButtons = document.querySelectorAll('.bproses');
    const modalproses = document.querySelector('.modalproses');
    const editprosesForm = document.querySelector('#editprosesForm');
    const editTahapan = document.querySelector('#editTahapan');
    const editPIC = document.querySelector('#editPIC');
    const closeprosesBtn = document.querySelector('.closeproses');
    //jadwal
    //ambil element untuk proses modal  
    const editjadwalButtons = document.querySelectorAll('.bjadwal');
    const modaljadwal = document.querySelector('.modaljadwal');
    const editjadwalForm = document.querySelector('#editjadwlForm');
    const edittanggalsidang = document.querySelector('#edittanggalsidang');
    const editagendasidang = document.querySelector('#editagendasidang');
    const editlawyer = document.querySelector('#editlawyer');
    const editketerangan = document.querySelector('#editketerangan');
    const closejadwalBtn = document.querySelector('.closejadwal');

    // Ketika tombol edit di klik, tampilkan modal
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

    //proses
    editprosesButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            // Ambil data dari server berdasarkan id
            console.log(id);
            fetch(`get_proses.php?id_klien=${id}`)
                .then((response) => response.json())
                .then((data) => {
                    // Isi nilai input form edit dengan data yang diambil dari server
                    editTahapan.value = data.tahapan;
                    editPIC.value = data.PIC;
                    // Tampilkan modal edit
                    modalproses.style.display = 'block';
                })
                .catch((error) => console.error(error));
        });
    });
    //jadwal 
    editjadwalButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const id = button.getAttribute('data-id');
            // Ambil data dari server berdasarkan id
            
            fetch(`get_jadwal.php?id_klien=${id}`)
                .then((response) => response.json())
                .then((data) => {
                    editId.value = data.id_klien;
                    edittanggalsidang= data.tanggal_sidang;
                    editAgenda = data.agenda_sidang;
                    editlawyer = data.lawyer;
                    editketerangan = data.keterangan;
                    // Isi nilai input form edit dengan data yang diambil dari server
                    // Tampilkan modal edit
                    modaljadwal.style.display = 'block';
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
    closeprosesBtn.addEventListener('click', () => {
        modalproses.style.display = 'none';
    });

    // Ketika user mengklik diluar modal, sembunyikan modal
    window.addEventListener('click', (event) => {
        if (event.target === modalproses) {
            modalproses.style.display = 'none';
        }
    });
    closejadwalBtn.addEventListener('click', () => {
        modaljadwal.style.display = 'none';
    });

    // Ketika user mengklik diluar modal, sembunyikan modal
    window.addEventListener('click', (event) => {
        if (event.target === modaljadwal) {
            modaljadwal.style.display = 'none';
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

    //proses
    editprosesForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const tahapan = editId.value;
        const klasifikasi = editKlasifikasi.value;
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
    //jadwal
    editjadwalForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const id = editId.value;
        const tanggal = edittanggalsidang.value;
        const agenda = editAgenda.value;
        const lawyer = editlawyer.value;
        const keterangan = editketerangan.value;
        console.log(id);
        fetch('update_datajadwal.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    id_klien: id,
                    tanggal_sidang:tanggal,
                    agenda_sidang:agenda,
                    lawyer:lawyer,
                    keterangan:keterangan,
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