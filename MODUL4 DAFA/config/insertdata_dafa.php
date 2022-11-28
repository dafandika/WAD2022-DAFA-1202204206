<?php
    include('connect_dafa.php');
    $nama = $_POST['nama'];
    $pemilik = $_POST['pemilik'];
    $merk = $_POST['merk'];
    $tanggal = $_POST['tanggal'];
    $deskripsi = $_POST['deskripsi'];
    $foto = $_POST['foto'];
    $query = mysqli_query($connect, "INSERT INTO pengguna(nama, pemilik, merk, tanggal, deskripsi, foto) VALUES('$nama', '$pemilik', '$merk', '$tanggal', '$deskripsi', '$foto')");     
?>