<?php

    include 'config/koneksi.php';
   
    $id_gaji = $_GET['id'];

    $query="DELETE FROM `tb_gaji` WHERE `id_gaji`='$id_gaji'";

    if (mysqli_query($connect, $query)){   
        header("location:golongan.php");
     }
?>