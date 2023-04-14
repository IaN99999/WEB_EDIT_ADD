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
        margin-bottom: -50px; /* height of the footer */
      }

      .footer,
      .push {
        height: 50px; /* height of the footer */
      }

      .footer {
        background-color: #f5f5f5; /* set background color for the footer */
        position: relative;
        margin-top: -50px; /* negative margin equal to the height of the footer */
        clear: both;
      }

      /* Add padding to the bottom of the wrapper to prevent content from overlapping with the footer */
      .push {
        clear: both;
      }
    </style>

</head>
<body >

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

    <div class="wrapper">
      <!-- Your content goes here -->
      <header>
        <div class="container">
        <h1 style="padding-top:35px">Contoh Footer HTML</h1>
        </div>  
    </header>
      <main>
        <div class="container">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida id elit at euismod. Nunc lacinia nunc vel consequat. </p>
        </div>  
    </main>
      <div class="push"></div>
    </div>
    <footer class="footer" >
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h3>Tentang Kami</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida id elit at euismod. Nunc lacinia nunc vel consequat. </p>
          </div>
          <div class="col-md-6">
            <h3>Kontak</h3>
            <p>Jl. Contoh No. 123</p>
            <p>Telp. (021) 1234567</p>
            <p>Email: info@contoh.com</p>
          </div>
        </div>
  </div>
</footer>

</body>


</html>