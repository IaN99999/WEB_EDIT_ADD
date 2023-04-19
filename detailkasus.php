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
            <table class="table table-bordered" id="proses">
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
            <table class="table table-bordered" id="jadwal">
                <thead style="background-color:#25316D">
                    <tr>
                        <th style="color:white">Tanggal sidang</th>
                        <th style="color:white">Agenda sidang</th>
                        <th style="color:white">Lawyer</th>
                        <!-- <th style="color:white">Keterangan</th> -->
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
                            // echo "<td style='color:white'>" . $row["keterangan"] . "</td>";
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
    <!-- modal untuk data umum -->
    <!-- <div class="modal" id="modaldata">
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
                <input type="submit" value="Simpan">
                <br><br>
            </form>
        </div>
    </div> -->
</body>
<!-- <script>
    // mendapatkan nilai dari parameter query string "edit"
    const urlParams = new URLSearchParams(window.location.search);
    const edit = urlParams.get('edit');

    // mencari elemen tabel
    const table = document.querySelector('#dataumum');

    // menambahkan kolom edit jika nilai "edit" adalah "true"
    $.ajax({
        url: 'GETdata.php',
        method: 'GET',
        success: function(response) {
            const klienData = JSON.parse(response);

            // Menambahkan kolom Edit pada tabel jika edit === true
            if (klienData.edit === true) {
                const th = document.createElement('th');
                th.textContent = 'Edit';
                table.querySelector('tr').appendChild(th);

                table.querySelectorAll('tr:not(:first-child)').forEach(tr => {
                    const button = document.createElement('button');
                    button.classList.add('tombol', 'btn-success');
                    button.dataset.id = tr.dataset.id; // Mengambil id_klien dari data attribute pada baris tabel
                    button.textContent = 'Edit';
                    const td = document.createElement('td');
                    td.appendChild(button);
                    tr.appendChild(td);
                });
            }

            // Menampilkan data klien pada tabel
            const tbody = table.querySelector('tbody');
            klienData.data.forEach(row => {
                const tr = document.createElement('tr');
                tr.dataset.id = row.id_klien; // Menambahkan data attribute id_klien pada baris tabel
                const td1 = document.createElement('td');
                td1.textContent = row.nama;
                const td2 = document.createElement('td');
                td2.textContent = row.email;
                tr.appendChild(td1);
                tr.appendChild(td2);
                tbody.appendChild(tr);
            });
        },
        error: function(error) {
            console.log(error);
        }
    });



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
    const editLink = " ";

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
</script> -->

</html>