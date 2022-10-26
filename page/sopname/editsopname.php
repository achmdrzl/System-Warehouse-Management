<?php
$kode_barang = $_GET['kode_barang'];
$sql2 = $koneksi->query("select * from gudang where kode_barang = '$kode_barang'");
$tampil = $sql2->fetch_assoc();

$level = $tampil['level'];

?>

<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">SO Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="body">
                    <form method="POST" enctype="multipart/form-data">

                        <label for="">Kode Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_barang" class="form-control" id="kode_barang" value="<?php echo $tampil['kode_barang']; ?>" readonly />
                            </div>
                        </div>

                        <label for="">Nama Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_barang" value="<?php echo $tampil['nama_barang']; ?>" class="form-control" readonly/>
                            </div>
                        </div>

                        <label for="">Jumlah</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="jumlah" value="<?php echo $tampil['jumlah']; ?>" class="form-control" readonly/>
                            </div>
                        </div>
                         
                        <label for="">Jumlah di Gudang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="jumlah_on" value="<?php echo $tampil['on_gudang']; ?>" class="form-control"/>
                            </div>
                        </div>

                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">

                    </form>

                    <?php

                    if (isset($_POST['simpan'])) {

                        $kode_barang = $_POST['kode_barang'];
                        $jumlah_on = $_POST['jumlah_on'];


                        $sql = $koneksi->query("update gudang set on_gudang='$jumlah_on' where kode_barang='$kode_barang'");

                        if ($sql2) {
                    ?>

                            <script type="text/javascript">
                                alert("Data Berhasil Diubah");
                                window.location.href = "?page=sopname";
                            </script>

                    <?php
                        }
                    }
                    ?>