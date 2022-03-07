
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from admin.pixelstrap.com/viho/theme/jsgrid-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 03:00:45 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
    <style>
    #x {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 10px;
    }
    </style>
    <title>Penggajian Tobadak</title>
   
  </head>
  <body>
    <center>
		<p style="font-size: 1.2em">KABUPATEN MAMUJU TENGAH<br>DAFTAR PEMBAYARAN GAJI INDUK ASN<br>KANTOR KECAMATAN TOBADAK | KANTOR KECAMATAN TOBADAK<br>BULAN: <?php $bulan = new DateTime(); echo $bulan->format('F Y'); ?></p>
        
		
	</center>


 
	<br/>

    <table id="x" style="width:100%">
        <tr id="x">
            <td id="x" rowspan="2">NO</th>
            <td id="x" rowspan="2" style="text-align: left;">NAMA PEGAWAI<br>NIP<br>STATUS PEGAWAI/GOLONGAN</th>
            <td id="x" rowspan="2" style="text-align: left;">-STATUS KAWIN<br>-ANAK<br>--------------<br>-JMLH JIWA</th>
            <td id="x" colspan="4" style="text-align: center;">PENGHASILAN</th>
            <td id="x" colspan="2" style="text-align: center;">POTONGAN</th>
            <td id="x" rowspan="2" style="text-align: left;">TANDA TANGAN<br>NO. DOSIR</th>
             
        </tr>
        <tr id="x">
            <td id="x" style="text-align: right;">GAJI POKOK<br>TUNJ. ISTRI/SMI<br>TUNJ. ANAK<br>JUMLAH</td>
            <td  id="x" style="text-align: right;">TUNJ. ESELON<br>TUNJ. FUNG UMUM<br>TJ. FUNGSIONAL<br>TJ. KHUSUS</td>
            <td  id="x" style="text-align: right;">TUNJ. BERAS<br>TUNJ. Pajak</td>
            <td  id="x" style="text-align: right;">BPJSKES 4%<br>TUNJ. JKK<br>TUNJ. JKM<br>TAPERUM<br>PEMBULATAN<br>JUM. KOTOR</td>
            <td  id="x" style="text-align: right;">POT. PAJAK<br>BPJS 4%<br>POT. IWP<br>POT. TAPERUM<br>POT. JKK<br>POT. JKM</td>
            <td  id="x" style="text-align: right;">POT. BERAS<br>JUMLAH BERSIH</td>
        </tr>
        
    
 
  <?php
    include 'config/koneksi.php';


    $sql = "SELECT `id_pegawai_pns`, `nip`, `nama`, `jumlah_anak`, `hp`, tb_golongan.golongan, `tb_eselon`.`golongan` AS 'eselon', `tb_eselon`.`nominal` AS 'nominal_eselon',`tunjangan_istri`, `tunjangan_anak`, `tunjangan_pajak`, `bpjs`, `status`, `masa_kerja`, `gaji_pokok`, `gaji_kotor`, `gaji_bersih`, `tunjangan_fungsional`,`taperum`, `tunjangan_fungsional`, `tunjangan_jkk`, `tunjangan_iwp`, `tunjangan_jkm`, `tunjangan_beras`, `potongan`   FROM `tb_pegawai_pns`, `tb_golongan`, `tb_eselon` WHERE (tb_golongan.id_golongan = tb_pegawai_pns.id_golongan AND tb_eselon.id_eselon = tb_pegawai_pns.id_eselon)";
    $query = mysqli_query($connect, $sql);

    
    $no=1;    

    while ($row = mysqli_fetch_array($query)){

      
        echo '
            <tr id="x" >
                <td  id="x" style="text-align: center;">'.$no.'</td>
                <td id="x">  '.$row['nama'].'<br>'.$row['nip'].'<br>'.$row['golongan'].'</td>
                ';

                if($row['status']=='belum kawin'){
                    echo '<td  id="x" style="text-align: center;">TK - 0<br>'.$row['jumlah_anak'].'<br>------<br>'.($row['jumlah_anak']+1).'</td>';
                }else{
                    echo '<td  id="x" style="text-align: center;">K - 1<br>'.$row['jumlah_anak'].'<br>------<br>'.($row['jumlah_anak']+2).'</td>';
                }
                
          echo' <td  id="x" style="text-align: right;">'.number_format($row['gaji_pokok'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_istri'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_anak'], 0, ",", ".")
                                                .'<br>'.number_format(($row['gaji_pokok']+$row['tunjangan_istri']+$row['tunjangan_anak']), 0, ",", ".")
                                                .'</td>

                <td  id="x" style="text-align: right;">'.number_format($row['nominal_eselon'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_fungsional'], 0, ",", ".").'
                                                  <br>0
                                                  <br>0
                                                  </td>
                <td  id="x" style="text-align: right;">'.number_format($row['tunjangan_beras'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_pajak'], 0, ",", ".").'</td>
                <td  id="x" style="text-align: right;">'.number_format($row['bpjs'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_jkk'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_jkm'], 0, ",", ".")
                                                .'<br>'.number_format($row['taperum'], 0, ",", ".")
                                                .'<br>0
                                                  <br>'.number_format($row['gaji_kotor'], 0, ",", ".").'</td>
                <td  id="x" style="text-align: right;">'.number_format($row['tunjangan_pajak'], 0, ",", ".")
                                                .'<br>'.number_format($row['bpjs'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_iwp'], 0, ",", ".")
                                                .'<br>'.number_format($row['taperum'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_jkk'], 0, ",", ".")
                                                .'<br>'.number_format($row['tunjangan_jkm'], 0, ",", ".")
                                                .'</td>
                <td  id="x" style="text-align: right;">'.number_format(0, 0, ",", ".")
                                                    .'<br>'.number_format($row['gaji_bersih'], 0, ",", ".").'</td>
                <td  id="x" style="text-align: left;">'.$no.'......................</td>
            </tr>
        ';

        $no++;

    }
  ?>

    </table>    

    <br>
    <br>
    <table style="width:100%">
    <tr>
        <td style="text-align: center;"></th>
        <td style="text-align: center;"><?php $bulan = new DateTime(); echo date('d')." ".$bulan->format('F Y'); ?></p></th>
        
    </tr>
    <tr>
        <td style="text-align: center;">KEPALA KANTOR KECAMATAN TOBADAK</th>
        <td style="text-align: center;">BENDAHARA PENGELUARAN</th>
        
    </tr>
    <tr>
        <td  style="text-align: center;"><br><br><br></td>
        <td  style="text-align: center;"><br><br><br></td>
       
    </tr>
    <tr>
        <td  style="text-align: center;"><u>GUNANTO</u></td>
        <td  style="text-align: center;"><u>TARMAYANI, SE</u></td>
       
    </tr>
    <tr>
        <td style="text-align: center;">NIP 196808201991031013</td>
        <td  style="text-align: center;">NIP 197101102009062000</td>
        
    </tr>
    </table>
 
	<!-- <script>
		window.print();
	</script> -->
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/jsgrid-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 03:00:51 GMT -->
</html>