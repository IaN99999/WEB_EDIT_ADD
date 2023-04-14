<?php
session_start();
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validasi username dan password
    $sql = "SELECT * FROM data_admin WHERE username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Jika username dan password cocok
        $_SESSION["username"] = $username;
        header("Location: admin.php"); // Redirect ke halaman dashboard
    } else {
        // Jika username dan password tidak cocok
        $error = "Username atau password salah";
        echo $error;
    }
}
?>
