<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Stock Opname</h6>
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
                            <th>Satuan</th>
                            <th>Jumlah</th>
                            <th>Jumlah di Gudang</th>
                            <th>Pengaturan</th>

                        </tr>
                    </thead>

                    <tbody>
                        <?php

                        $no = 1;
                        $sql = $koneksi->query("select * from gudang");
                        while ($data = $sql->fetch_assoc()) {

                        ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['kode_barang'] ?></td>
                                <td><?php echo $data['nama_barang'] ?></td>
                                <td><?php echo $data['jenis_barang'] ?></td>
                                <td><?php echo $data['satuan'] ?></td>
                                <td><?php echo $data['jumlah'] ?></td>
                                <td><?php echo $data['on_gudang'] ?></td>

                                <td>
                                    <a href="?page=sopname&aksi=editsopname&kode_barang=<?php echo $data['kode_barang'] ?>" class="btn btn-success">Ubah</a>
                                </td>
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