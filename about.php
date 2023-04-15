<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>about page</title>

  <style>
    html,
    body {
      height: 100%;
    }

    .wrapper {
      min-height: 100%;
      margin-bottom: -50px;
      /* height of the footer */
    }

    .footer,
    .push {
      height: 50px;
      /* height of the footer */
    }

    .footer {
      background-color: #f5f5f5;
      /* set background color for the footer */
      position: relative;
      margin-top: -50px;
      /* negative margin equal to the height of the footer */
      clear: both;
    }

    /* Add padding to the bottom of the wrapper to prevent content from overlapping with the footer */
    .push {
      clear: both;
    }
  </style>

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
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="masuk.php">Login Admin</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">About</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <br><br><br><br><br>
    <div class="col-9">
    <h3 style="color:white">Disclaimer</h3>
    <p style="color:white">Halaman ini ditujukan untuk semua klien aktif Familaw Indonesia sebagai bentuk transparansi, komunikasi, informasi dan upaya peningkatan
      kualitas layanan Familaw Indonesia. Halaman ini tidak mencantumkan nama, identitas dan informasi kerahasiaan klien untuk menjamin
      kerahasiaan dan privasi. Sehingga setiap klien telah memiliki ID Kliennya masing-masing, dan untuk data lebih lanjut klik pada kolom "detail".
    </p>
    </div>
  </div>
  <br> <br>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <h3 style="color:white">Contact</h3>
        <p style="color:white">Jl. Contoh No. 123</p>
        <p style="color:white">Telp. (021) 1234567</p>
        <p style="color:white">Email: info@contoh.com</p>
      </div>
      <div class="col-6">
        <h3 style="color:white">Jadwal Update Layanan Sistem</h3>
        <p style="color:white">Senin s/d Jumat : Proses Pemberkasan</p>
        <p style="color:white">Setiap senin : Jadwal Sidang</p>
      </div>
    </div>
  </div>

</body>


</html>