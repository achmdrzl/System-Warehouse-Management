 <?php

	$id = $_GET['id'];
	$data = $koneksi->query("select * from users where id = '$id' ");
	foreach ($data as $item) {
		if ($item['status'] === 'aktif') {
			$sql1 = $koneksi->query("update users set status='non-aktif' where id = '$id'");
		} else {
			$sql2 = $koneksi->query("update users set status='aktif' where id = '$id'");
		}
	}

	if ($sql1) {

	?>


 	<script type="text/javascript">
 		alert("Akun Berhasil di Non-Aktifkan");
 		window.location.href = "?page=pengguna";
 	</script>

 <?php

	} else {

	?>

 	<script type="text/javascript">
 		alert("Akun Berhasil di Aktifkan");
 		window.location.href = "?page=pengguna";
 	</script>
 <?php

	}

	?>