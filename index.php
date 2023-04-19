<!-- shift+alt+f-->
<!DOCTYPE html>
<html>

<head>
    <title>Familaw</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<?php
// Memanggil file a.php
include 'GETdata.php';
?>

<body style="background-color:#aba0a0">
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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="masuk.php">Login Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container-fluid" style="padding-top:25px">
        <form id="search-form" style="display: flex;
  align-items: center;
  justify-content: flex-end;">
            <input type="text" id="search-input" name="search">
            <button type="submit" class="search-button btn-light">Search</button>
        </form>
        <br>
        <div class="table-responsive">

            <table class="table table-bordered" id="data-table">
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
                    </tr>
                </thead>
                <tbody id="table-body" style="background-color:black">
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
                            echo "<td style='color:white'><button class='link btn-success' data-id='" . $row['id_klien'] . "' >detail</button></td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7'>Tidak ada data</td></tr>";
                    }
                    ?>
                </tbody>

            </table>
            <div id="pagination">
                <!-- Tombol halaman akan ditampilkan di sini -->
            </div>

        </div>

    </div>

</body>
<script>
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
                    window.location.href = `detailkasus.php?from=index&id_klien=${id}&klasifikasi_perkara=${data.klasifikasi_perkara}&pengadilan=${data.pengadilan}&misili_pengadilan=${data.misili_pengadilan}&no_perkara=${data.no_perkara}&tanggal=${data.tanggal}&agenda=${data.agenda}&link=${data.link}`;
                })
                .catch((error) => console.error(error));
        });
    });
    const searchForm = document.getElementById('search-form');
    const searchInput = document.getElementById('search-input');
    const searchButton = document.getElementById('search-button');
    const tableBody = document.getElementById('table-body');

    searchForm.addEventListener('submit', (event) => {
        event.preventDefault();
        const keyword = searchInput.value.trim().toLowerCase();
        if (keyword) {
            fetch(`search_data.php?keyword=${keyword}`)
                .then((response) => response.json())
                .then((data) => {
                    // Hapus data sebelumnya dari tabel
                    while (tableBody.firstChild) {
                        tableBody.removeChild(tableBody.firstChild);
                    }
                    // Tambahkan data hasil pencarian ke dalam tabel
                    data.forEach((item) => {
                        const row = tableBody.insertRow();
                        row.innerHTML = `
            <td style='color:white'>${item.id_klien}</td>
            <td style='color:white'>${item.Klasifikasi_perkara}</td>
            <td style='color:white'>${item.pengadilan}</td>
            <td style='color:white'>${item.misili_pengadilan}</td>
            <td style='color:white'>${item.no_perkara}</td>
            <td style='color:white'>${item.tanggal}</td>
            <td style='color:white'>${item.agenda}</td>
            <td style='color:white'><a href="${item.link}">Detail</a></td>
          `;
                    });
                })
                .catch((error) => console.error(error));
        }
    });

    searchButton.addEventListener('click', () => {
        searchForm.dispatchEvent(new Event('submit'));
    });

    // Ambil elemen tabel dan elemen pagination
    const dataTable = document.querySelector('#data-table tbody');
    const pagination = document.querySelector('#pagination');

    // Definisikan variabel untuk menyimpan data dan jumlah halaman
    let data = [];
    let pageCount = 0;

    // Fungsi untuk menampilkan data di tabel
    function renderData(page) {
        // Hitung indeks data pertama dan terakhir untuk halaman saat ini
        const startIndex = (page - 1) * 10;
        const endIndex = startIndex + 10;
        const currentPageData = data.slice(startIndex, endIndex);

        // Hapus semua baris data yang ada di tabel
        while (dataTable.firstChild) {
            dataTable.removeChild(dataTable.firstChild);
        }

        // Tambahkan baris data yang sesuai ke dalam tabel
        currentPageData.forEach((item, index) => {
            const row = dataTable.insertRow(index);
            const noCell = row.insertCell(0);
            const namaCell = row.insertCell(1);
            const emailCell = row.insertCell(2);
            const alamatCell = row.insertCell(3);

            noCell.textContent = startIndex + index + 1;
            namaCell.textContent = item.nama;
            emailCell.textContent = item.email;
            alamatCell.textContent = item.alamat;
        });
    }

    // Fungsi untuk menampilkan tombol halaman di pagination
    function renderPagination() {
        // Hapus semua tombol halaman yang ada di pagination
        while (pagination.firstChild) {
            pagination.removeChild(pagination.firstChild);
        }

        // Tambahkan tombol halaman yang sesuai ke dalam pagination
        for (let i = 1; i <= pageCount; i++) {
            const button = document.createElement('button');
            button.textContent = i;
            button.addEventListener('click', () => {
                renderData(i);
            });

            pagination.appendChild(button);
        }
    }

    // Fungsi untuk memuat data dari server
    function loadData() {
        // Lakukan fetch data dari server
        fetch('GETdata.php')
            .then((response) => response.json())
            .then((result) => {
                // Simpan data ke dalam variabel dan hitung jumlah halaman
                data = result;
                pageCount = Math.ceil(data.length / 10);

                // Tampilkan data dan tombol halaman di halaman pertama
                renderData(1);
                renderPagination();
            })
            .catch((error) => console.error(error));
    }

    // Panggil fungsi loadData untuk memuat data pertama kali
    loadData();
</script>

</html>