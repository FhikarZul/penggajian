<?php

    include 'config/koneksi.php';

    $id_pegawai = $_POST['id_pegawai'];
    $tgl = $_POST['tgl'];
    $status = $_POST['status'];


    $query="INSERT INTO `tb_kehadiran_pns`(`tgl`,`status`,`id_pegawai_pns`) VALUES ('$tgl','$status','$id_pegawai')"; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:absensi-pns.php");
    }
    

   
?>