<?php
    include 'koneksi.php';
    $id_pegawai = $_POST['id_pegawai'];
    $Nama = $_POST['Nama'];
    $jk = $_POST['jk'];
    $alamat  = $_POST['alamat'];
    mysqli_query($conn, "INSERT INTO pegawai VALUES('$id_pegawai','$Nama','$jk','$alamat')");
    header("location:home.php");
?>