<?php

    include 'config/koneksi.php';

    $id_pegawai = $_POST['id_pegawai'];
    $tgl = $_POST['tgl'];
    $id_kehadiran = $_POST['id_kehadiran'];


    $query="INSERT INTO `tb_kehadiran_kontrak`(`tgl`,`status`,`id_pegawai_kontrak`) VALUES 
    ('$tgl','$id_kehadiran','$id_pegawai')"; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:absensi-pegawai-kontrak.php");
    }
    

   
?>