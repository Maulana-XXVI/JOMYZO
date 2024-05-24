<?php
	$kd_barcode = $_GET['id'];
	$sql = $koneksi->query("delete from tb_barang where kode_barcode='$kd_barcode'");
?>

<script type="text/javascript">
					alert("Data Deleted");
					window.location.href="?page=barang";
</script> 