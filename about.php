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
        <br><br>
            <h3 style="color:white"> About us</h3>
            <p style="color:white">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam gravida id elit at euismod. Nunc lacinia nunc vel consequat. </p>
        </div>
        <br> <br>
          <div class="container">
            <h3 style="color:white">Contact</h3>
            <p style="color:white">Jl. Contoh No. 123</p>
            <p style="color:white">Telp. (021) 1234567</p>
            <p style="color:white">Email: info@contoh.com</p>
          
  </div>

</body>


</html>