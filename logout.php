<?php
session_start();
 
// Menghancurkan semua session
session_destroy();
 
// Redirect ke halaman login
header("location: index.php");
exit;
?>
