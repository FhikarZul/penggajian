<?php

    include 'config/koneksi.php';
   
    $id_pegawai = $_GET['id'];

    $query="DELETE FROM `tb_kehadiran_pns` WHERE `id_pegawai_pns`='$id_pegawai'";

    if (mysqli_query($connect, $query)){   


        $query="DELETE FROM `tb_pegawai_pns` WHERE `id_pegawai_pns`='$id_pegawai'";

        if (mysqli_query($connect, $query)){   
            header("location:pegawai-pns.php");
        }

        
     }
?>