<?php

    include 'config/koneksi.php';

    $nominal = $_POST['gaji'];
    $masa_kerja = $_POST['masa_kerja'];
    $id_gol = $_POST['gol'];
    $id_golongan = $_GET['id'];


    $query="UPDATE `tb_gaji` SET `gaji`='$nominal',`masa_kerja`='$masa_kerja',`id_golongan`='$id_gol' WHERE `id_gaji`=".$id_golongan; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:golongan.php");
    }
    

   
?>