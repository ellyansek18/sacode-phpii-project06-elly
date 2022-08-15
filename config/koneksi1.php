<?php 

    // KONEKSI TANPA DATABASE

    // Integrasi config
    require_once('config.php');

    // Membuat Koneksi
    $koneksi = new mysqli($servername, $username, $password);

    // Periksa Koneksi
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
      }
      echo "Connected successfully";

?>