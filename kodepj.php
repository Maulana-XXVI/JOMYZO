<?php 
	function kode_random($length){
		$data = "1234567890";
		$string = 'PJ-';

		for ($i=0; $i < $length; $i++) { 
			$pos = rand(0, strlen($data)-1);
			$string .= $data[$pos];
		}
		return $string;
	}

$koneksi = mysqli_connect("localhost","root","moy","db_penjualan_barang");

// Check connection
if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}

$kode = kode_random(10);
?>
