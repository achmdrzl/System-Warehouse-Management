<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Barang Expired</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>
                            <th>Tanggal Expired</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $no = 1;
                        $sql = $koneksi->query("SELECT * FROM barang_masuk JOIN gudang WHERE barang_masuk.kode_barang = gudang.kode_barang AND gudang.status = 'aktif' group by barang_masuk.nama_barang order by barang_masuk.kode_barang ASC");
                        while ($data = $sql->fetch_assoc()) {

                        ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['kode_barang'] ?></td>
                                <td><?php echo $data['nama_barang'] ?></td>
                                <td><?php echo $data['jenis_barang'] ?></td>
                                <td><?php echo $data['tgl_exp'] ?></td>
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