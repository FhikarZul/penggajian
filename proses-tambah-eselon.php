<?php

    include 'config/koneksi.php';

    $gol = $_POST['gol'];
    $ket = $_POST['ket'];
    $nominal = $_POST['nominal'];


    $query="INSERT INTO `tb_eselon`(`golongan`, `ket`, `nominal`) VALUES ('$gol','$ket','$nominal')"; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:eselon.php");
    }
    

   
?>