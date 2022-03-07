
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
    <title>Penggajian Tobadak - Print</title>
   
  </head>
  <body>
    <center>
		<h2>SLIP GAJI</h2>
		<b>Bulan <?php $bulan = new DateTime(); echo $bulan->format('F Y'); ?></b>
        
	</center>
    <hr/>
	<br/>
 
  <?php
    include 'config/koneksi.php';

    $id_pegawai = $_GET['id'];

    $sql = "SELECT `id_pegawai_pns`, `nip`, `nama`, `hp`, tb_golongan.golongan, `tb_eselon`.`golongan` AS 'eselon', `tb_eselon`.`nominal` AS 'nominal_eselon', `tb_eselon`.`ket` AS 'jabatan', `tunjangan_istri`, `tunjangan_anak`, `tunjangan_pajak`, `bpjs`, `status`, `masa_kerja`, `gaji_pokok`, `gaji_kotor`, `gaji_bersih`, `taperum`, `tunjangan_fungsional`, `tunjangan_jkk`, `tunjangan_iwp`, `tunjangan_jkm`, `tunjangan_beras`, `potongan` FROM `tb_pegawai_pns`, `tb_golongan`, `tb_eselon` WHERE tb_golongan.id_golongan = tb_pegawai_pns.id_golongan AND tb_eselon.id_eselon = tb_pegawai_pns.id_eselon AND `id_pegawai_pns`=".$id_pegawai;
    $query = mysqli_query($connect, $sql);

    echo '
       
        
        <center><table cellpadding="8">';
            

    while ($row = mysqli_fetch_array($query)){
        echo '
                <tr>
                    <td>Pegawai</td>
                    <td>:</td>
                    <td>'.$row['nama'].' / '.$row['nip'].'</td> 

                    <td><div style="margin-left: 250px"></td>

                    
                </tr>
                <tr>
                    <td>Golongan</td>
                    <td>:</td>
                    <td>'.$row['golongan'].'</td> 
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td>:</td>
                    <td>'.$row['jabatan'].'</td> 
                </tr>
                
            
        ';

        }

        

    echo '</table></center>';
    echo '<br><br>';
    

    echo '

    <style>
        #x{
        border: 1px solid black;
        // border-collapse: collapse;
        }
    </style>
    
    <center><table id="x" cellpadding="3">';
        
            
    $query = mysqli_query($connect, $sql);
    while ($row = mysqli_fetch_array($query)){

        
        echo '
            
                <tr id="x">
                    <td></td>
                    <td></td>
                    <td><b>Penghasilan</b></td> 

                    <td><div style="margin-left: 100px"></td>
                    <td></td>
                    <td></td>
                    <td><b>Potongan</b></td>
                    
                </tr>
                
                <tr>
                    <td></td>
                    <td>Gaji Pokok</td>
                    <td></td>
                    <td>'.number_format($row['gaji_pokok'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Pot. Beras</td>
                    <td></td>
                    <td>'.number_format(0, 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Suami/Istri</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_istri'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Pot. Pajak</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_pajak'], 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Anak</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_anak'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Pot. BPJS</td>
                    <td></td>
                    <td>'.number_format($row['bpjs'], 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Struktural</td>
                    <td></td>
                    <td>'.number_format($row['nominal_eselon'], 0, ",", ".").'</td> 

                
                    <td></td>
                    <td>Pot. TAPERUM</td>
                    <td></td>
                    <td>'.number_format($row['taperum'], 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Fung. Umum</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_fungsional'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Pot. IWP</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_iwp'], 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Fungsional</td>
                    <td></td>
                    <td>'.number_format(0, 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Pot. JKK</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_jkk'], 0, ",", ".").'</td>  
                </tr>

                <tr>
                    <td></td>
                    <td>T. Khusus</td>
                    <td></td>
                    <td>'.number_format(0, 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Pot. JKM</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_jkm'], 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Beras</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_beras'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>--------</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. BPJS</td>
                    <td></td>
                    <td>'.number_format($row['bpjs'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Jml. Potongan</td>
                    <td></td>
                    <td>'.number_format($row['potongan'], 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. JKK</td>
                    <td></td>
                    <td>'.number_format($row['tunjangan_jkk'], 0, ",", ".").'</td>  

                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>--------</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>TAPERUM</td>
                    <td></td>
                    <td>'.number_format($row['taperum'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td>Jml. Bersih</td>
                    <td></td>
                    <td>'.number_format($row['gaji_bersih'], 0, ",", ".").'</td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Bulat</td>
                    <td></td>
                    <td>0</td> 

                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> 
                </tr>

                <tr>
                    <td></td>
                    <td>T. Pajak</td>
                    <td></td>
                    <td><u>'.number_format($row['tunjangan_pajak'], 0, ",", ".").'</u></td> 

                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> 
                </tr>

                <tr>
                    <td></td>
                    <td>Jumlah Kotor</td>
                    <td></td>
                    <td>'.number_format($row['gaji_kotor'], 0, ",", ".").'</td> 

                   
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td> 
                </tr>
            
        ';

        }

        

    echo '</table></center>';
    ?>

    <center>
        <table>
        
            <tr>
                <td></td>
                <td></td>
                <td><br><br><br></td> 
                <td><div style="margin-left: 180px"></td>
                <td>Bendahara</td>
                
            </tr>

        </table>
    </center>
    <br>
    <br>
    <br>
    <center>
        <table>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><div style="margin-left: 200px"></td>  
                <td><center><u>Tarmayani, S.E</u></center></td> 
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td><div style="margin-left: 200px"></td>  
                <td>NIP. 19710110 200906 2 001</td> 
            </tr>
        
        </table>
    </center>


    <br>
    <br>
    <br>
    
 
	<script>
		window.print();
	</script>
  </body>

<!-- Mirrored from admin.pixelstrap.com/viho/theme/jsgrid-table.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Sep 2021 03:00:51 GMT -->
</html>