<?php

    include 'config/koneksi.php';

    $nip = $_POST['nip'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $golongan = $_POST['id_golongan'];
    $status = $_POST['id_status'];
    $jumlah_anak = $_POST['jumlah_anak'];
    $hp = $_POST['hp'];
    $eselon = $_POST['id_eselon'];
    $masa_kerja = $_POST['masa_kerja'];
    $nominal_tunjangan_fungsional = $_POST['tunjangan_fungsional'];
    $nominal_taperum = $_POST['taperum'];



    // status
    $status_txt;

    if($status==0){
        $status_txt = "belum_kawin";
    }else{
        $status_txt = "kawin";
    }   

    echo 'Status: '.$status_txt;
    echo '<br><br>';


    // gaji pokok
    $gaji_pokok;

    $sql = "SELECT gaji FROM `tb_gaji` WHERE `masa_kerja`=".$masa_kerja." AND `id_golongan`=".$golongan;
    $query = mysqli_query($connect, $sql);
    $cek_gaji = mysqli_num_rows($query);

    if($cek_gaji==0){

        $sql = "SELECT gaji FROM `tb_gaji` WHERE `masa_kerja`=".($masa_kerja-1)." AND `id_golongan`=".$golongan;
        $query = mysqli_query($connect, $sql);

        while ($row = mysqli_fetch_array($query)){
            $gaji_pokok = $row['gaji'];
        }

    }else{

        $sql = "SELECT gaji FROM `tb_gaji` WHERE `masa_kerja`=".$masa_kerja." AND `id_golongan`=".$golongan;
        $query = mysqli_query($connect, $sql);

        while ($row = mysqli_fetch_array($query)){
            $gaji_pokok = $row['gaji'];
        }
    }

    echo 'Gaji Pokok: Rp'.$gaji_pokok;
    echo '<br><br>';




    // tunjangan istri
    $tunjangan_istri;
    $status_txt;

    if($status==0){
        $tunjangan_istri = 0;
        $status_txt = "belum kawin";
    }else{
        $tunjangan_istri = ($gaji_pokok*10)/100;    
        $status_txt = "kawin";
    }   

    echo 'Tunjangan Istri: Rp'.$tunjangan_istri;
    echo '<br><br>';




    // tunjangan anak
    $tunjangan_anak;

    if($status==0){
        $tunjangan_anak = 0;
    }else{
        $tunjangan_anak = (($gaji_pokok*2)/100)*$jumlah_anak;    
    }   

    echo 'Tunjangan Anak: Rp'.$tunjangan_anak;
    echo '<br><br>';



    // tunjangan beras
    $tunjangan_beras;
    if($status==0){
        
        $tunjangan_beras= 7242*10;
       
    }else{

        $tunjangan_beras= 7242*(2+$jumlah_anak)*10;
        
    }   
 
     echo 'Tunjangan Beras: Rp'.$tunjangan_beras;
     echo '<br><br>';


    // eselon
    $tunjangan_eselon;
    $sql = "SELECT `nominal` FROM `tb_eselon` WHERE `id_eselon`=".$eselon;
    $query = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_array($query)){
        $tunjangan_eselon = $row['nominal'];
    }

    echo 'Eselon: Rp'.$tunjangan_eselon;
    echo '<br><br>';


    // tunjangan bpjs
    $tunjangan_bpjs = (($gaji_pokok+$tunjangan_istri+$tunjangan_anak+$tunjangan_eselon+$nominal_tunjangan_fungsional)*4)/100;

    echo 'Tunjangan BPJS: Rp'.$tunjangan_bpjs;
    echo '<br><br>';

    // tunjangan fungsional
    
    echo 'Tunjangan Fungsional: Rp'.$nominal_tunjangan_fungsional;
    echo '<br><br>';

    // tunjangan taperum

    echo 'Tunjangan Taperum: Rp'.$nominal_taperum;
    echo '<br><br>';

    // tunjangan jkk

    $tunjangan_jkk=$gaji_pokok*(0.24/100);
    echo 'Tunjangan Jkk: Rp'.$tunjangan_jkk;
    echo '<br><br>';


    // tunjangan jkm

    $tunjangan_jkm=$gaji_pokok*(0.72/100);
    echo 'Tunjangan Jkm: Rp'.$tunjangan_jkm;
    echo '<br><br>';

    // tunjangan iwp

    $tunjangan_iwp=($gaji_pokok+$tunjangan_istri+$tunjangan_anak)*(8/100);
    echo 'Tunjangan IWP: Rp'.$tunjangan_iwp;
    echo '<br><br>';


    // gaji kotor
    $gaji_kotor = ($gaji_pokok + $tunjangan_istri + $tunjangan_anak + $tunjangan_eselon + $nominal_tunjangan_fungsional + $tunjangan_beras + $tunjangan_bpjs + $tunjangan_jkk + $tunjangan_jkm);

    echo 'Gaji Kotor: Rp'.$gaji_kotor;
    echo '<br><br>';

    //pajak
    $pajak;

    if($gaji_kotor>=60000000){
        $pajak = ($gaji_kotor-5)/100;
    }else{
        $pajak = 0;
    }
    echo 'Pajak: Rp'.$pajak;
    echo '<br><br>';

    // potongan
    $potongan = $pajak+$tunjangan_bpjs+$tunjangan_iwp+$nominal_taperum+$tunjangan_jkk+$tunjangan_jkm;
    echo 'Potongan: Rp'.$potongan;
    echo '<br><br>';

    // gaji bersih
    $gaji_bersih = $gaji_kotor - $potongan; 
    echo 'Gaji Bersih: Rp'.$gaji_bersih;
    echo '<br><br>';


    $query="INSERT INTO `tb_pegawai_pns`(
        `nip`, `nama`, `hp`, `id_golongan`, `id_eselon`, `tunjangan_istri`, `tunjangan_anak`, `tunjangan_beras`, `tunjangan_pajak`, `bpjs`, `tunjangan_fungsional`,`taperum`, `tunjangan_jkk`, `tunjangan_jkm`, `tunjangan_iwp`,`status`, `jumlah_anak`, `masa_kerja`, `gaji_pokok`, `gaji_kotor`, `potongan`, `gaji_bersih`) VALUES (
        '$nip','$nama_pegawai','$hp','$golongan','$eselon','$tunjangan_istri','$tunjangan_anak','$tunjangan_beras','$pajak','$tunjangan_bpjs','$nominal_tunjangan_fungsional','$nominal_taperum', '$tunjangan_jkk','$tunjangan_jkm','$tunjangan_iwp', '$status_txt', '$jumlah_anak','$masa_kerja','$gaji_pokok','$gaji_kotor', '$potongan', '$gaji_bersih')"; 

    
    if (mysqli_query($connect, $query)){   
        echo 'berhasil';
        header("location:pegawai-pns.php");
    }
    

   
?>