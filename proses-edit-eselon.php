<?php

    include 'config/koneksi.php';

    $gol = $_POST['gol'];
    $ket = $_POST['ket'];
    $nominal = $_POST['nominal'];
    $id_eselon = $_GET['id'];


    $query="UPDATE `tb_eselon` SET `golongan`='$gol',`ket`='$ket',`nominal`='$nominal' WHERE `id_eselon`=".$id_eselon; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:eselon.php");
    }
    

   
?>