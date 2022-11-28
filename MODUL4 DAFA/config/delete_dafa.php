<?php
include 'connect_dafa.php';
$id = $_GET["id_mobil"];

    //jalankan query DELETE untuk menghapus data
    $query = "DELETE FROM showroom_dafa_table WHERE id_mobil='$id' ";
    $hasil_query = mysqli_query($connect, $query);

    //periksa query, apakah ada kesalahan
    if(!$hasil_query) {
      die ("Failed to delete: ".mysqli_errno($connect).
       " - ".mysqli_error($connect));
    } else {
      echo "<script>alert('Delete successful.');window.location='../ListCar-Najla.php';</script>";
    }