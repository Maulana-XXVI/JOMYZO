
<?php

$host="localhost";
$user="root";
$password="moy";
$db="db_penjualan_barang";

$koneksi = mysqli_connect($host,$user,$password,$db);
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
?>