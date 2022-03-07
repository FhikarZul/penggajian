<?php

    include 'config/koneksi.php';

    $nama_pegawai = $_POST['nama_pegawai'];
    $id_lulusan = $_POST['id_lulusan'];
    $alamat = $_POST['alamat'];
    $hp = $_POST['hp'];

    $gaji;
    $lulusan;

    if($id_lulusan=='1'){
        $gaji = 300;
        $lulusan = 'SMA';

    }else if($id_lulusan=='2'){
        $gaji = 500;
        $lulusan = 'S1';

    }

    $query="INSERT INTO `tb_pegawai_kontrak`(`nama_pegawai`, `lulusan`, `alamat`, `hp`, `gaji_bersih`) VALUES ('$nama_pegawai','$lulusan','$alamat','$hp', '$gaji')"; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:pegawai-kontrak.php");
       
    }
    

   
?>