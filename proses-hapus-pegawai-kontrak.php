<?php

    include 'config/koneksi.php';
   
    $id_pegawai = $_GET['id'];

    $query="DELETE FROM `tb_pegawai_kontrak` WHERE `id_pegawai_kontrak`='$id_pegawai'";

    if (mysqli_query($connect, $query)){   
        header("location:pegawai-kontrak.php");
     }
?>