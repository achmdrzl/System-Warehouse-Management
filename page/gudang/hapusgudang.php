 <?php

	$kode_barang = $_GET['kode_barang'];
	$sql = $koneksi->query("select * from gudang where kode_barang = '$kode_barang'");
	foreach ($sql as $item) {
		if ($item['status'] === 'aktif') {
			$sql1 = $koneksi->query("update gudang set status='non-aktif'where kode_barang = '$kode_barang'");
		} else {
			$sql2 = $koneksi->query("update gudang set status='aktif' where kode_barang = '$kode_barang'");
		}
	}

	if ($sql1) {

	?>


 	<script type="text/javascript">
 		alert("Barang Berhasil di Non-Aktifkan");
 		window.location.href = "?page=gudang";
 	</script>

 <?php

	} else {

	?>

 	<script type="text/javascript">
 		alert("Barang Berhasil di Aktifkan");
 		window.location.href = "?page=gudang";
 	</script>
 <?php

	}

	?>
