<?php

    include 'config/koneksi.php';
   
    $id_eselon = $_GET['id'];

    $query="DELETE FROM `tb_eselon` WHERE `id_eselon`='$id_eselon'";

    if (mysqli_query($connect, $query)){   
        header("location:eselon.php");
     }
?>