<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Transaksi Barang Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTabl" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Stok Barang Masuk</th>
                            <th>Supplier</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $kode_barang = $_GET['kode_barang'];

                        $no = 1;
                        $sql = $koneksi->query("SELECT * FROM barang_masuk WHERE kode_barang = '$kode_barang';");
                        while ($data = $sql->fetch_assoc()) {

                        ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['kode_barang'] ?></td>
                                <td><?php echo $data['nama_barang'] ?></td>
                                <td><?php echo $data['satuan'] ?></td>
                                <td><?php echo $data['jumlah'] ?></td>
                                <td><?php echo $data['pengirim'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Transaksi Barang Keluar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTabl" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Satuan</th>
                            <th>Stok Barang Keluar</th>
                            <th>Stok Barang Saat Ini</th>
                            <th>Tujuan Barang</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        $kode_barang = $_GET['kode_barang'];

                        $no = 1;
                        $sql = $koneksi->query("SELECT * FROM `barang_keluar` WHERE kode_barang = '$kode_barang';");
                        while ($data = $sql->fetch_assoc()) {

                        ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['kode_barang'] ?></td>
                                <td><?php echo $data['nama_barang'] ?></td>
                                <td><?php echo $data['satuan'] ?></td>
                                <td><?php echo $data['jumlah'] ?></td>
                                <td><?php echo $data['total'] ?></td>
                                <td><?php echo $data['tujuan'] ?></td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</div>