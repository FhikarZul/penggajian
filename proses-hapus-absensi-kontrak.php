<?php

    include 'config/koneksi.php';
   
    $id_kehadiran = $_GET['id'];

    $query="DELETE FROM `tb_kehadiran_kontrak` WHERE `id_kehadiran_kontrak`='$id_kehadiran'";

    if (mysqli_query($connect, $query)){   
        header("location:absensi-pegawai-kontrak.php");
     }
?>