<?php

include 'config/koneksi.php';

$id_kontak = $_GET['id'];

function sendsms($to,$msg){

	//id mesin dan pin
	$idmesin="908";
	$pin="033117";
	//=======================================================================

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "https://sms.indositus.com/sendsms.php?idmesin=$idmesin&pin=$pin&to=$to&text=$msg");
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return($output);

}

	$nama;

	$sql = "SELECT * FROM `tb_pegawai_pns` WHERE `hp`=''";

	$query = mysqli_query($connect, $sql);

	$cek_null = mysqli_num_rows($query);

	while ($row = mysqli_fetch_array($query)){
		$nama = $row['nama'];
	}				

	if($cek_null){
		header("location:pegawai-pns.php?m=Gagal melakukan sms gateway karena salah satu karywanan yang bernama <b>".$nama."</b> tidak memiliki nomor hp.");
	}else{

		$sql1 = "SELECT * FROM `tb_pegawai_pns`";

		$query1 = mysqli_query($connect, $sql1);

		while ($row = mysqli_fetch_array($query1)){

			$nama = $row['nama'];
			$no_hp = $row['hp'];
			$gaji = $row['gaji_bersih'];
			$tgl_sekarang=date('d/m/Y');
			$bulan= new DateTime();
		
			$sending=sendsms($no_hp,'Yth Sdr/i '.$nama.' Gaji Anda bln '.$bulan->format('F Y').' telah ditransfer sebesar Rp'.number_format($gaji, 0, ",", ".").' pada tgl '.$tgl_sekarang.' TKS');
		
			if($sending == "success"){
				echo $nama.' berhasil<br>';
				header("location:pegawai-pns.php?m=Berhasil melakukan sms gateway.");
			}else{
				echo 'gagal';
			}
		}
	}




?>