<?php

    include 'config/koneksi.php';

    $id_gol = $_POST['gol'];
    $gaji = $_POST['gaji'];
    $masa_kerja = $_POST['masa_kerja'];


    $query="INSERT INTO `tb_gaji`(`gaji`, `masa_kerja`, `id_golongan`) VALUES ('$gaji','$masa_kerja','$id_gol')"; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:golongan.php");
    }
    

   
?>