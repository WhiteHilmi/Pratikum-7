<?php
    include 'koneksi.php';
    $id_pegawai = $_POST['id_pegawai'];
    $Nama = $_POST['Nama'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    echo $id_pegawai,$Nama,,$jk,$alamat;
    mysqli_query($conn, "UPDATE pegawai SET Nama='$Nama',jk='$jk',
    alamat='$alamat' WHERE id_pegawai = $id_pegawai");
    header("location:home.php");
?>