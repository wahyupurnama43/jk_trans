<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Data Pengiriman</h3>
                <div class=""></div>
                <div class="">
                    <button class="btn btn-info text-white btn-sm" data-toggle="modal" data-target="#rangetanggal">
                        <span class="btn-inner--text ">Print</span>
                    </button>
                    <a href="<?= BASE_URL ?>/prints" class="btn btn-success text-white btn-sm">
                        <span class="btn-inner--text ">Print all</span>
                    </a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addProduct">
                        <span class="btn-inner--text ">Tambah Pengiriman</span>
                        <span class="btn-inner--icon"><i class="ni ni-fat-add"></i></span>
                    </button>


                </div>
            </div>
            <div class="table-responsive py-4">
                <table class="table table-flush text-center" id="datatable-basic">
                    <thead class="thead-light">
                        <tr>
                            <th>id</th>
                            <th>Kode Pengiriman</th>
                            <th>Jumlah Barang</th>
                            <th>Berat</th>
                            <th>Harga</th>
                            <th>Total</th>
                            <th>Penerima</th>
                            <th>Keterangan</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 ?>
                        <?php foreach ($data['pengiriman'] as $p): ?>
                        <tr>
                            <td><?= $i++ ?></td>
                            <td><?= $p['kode_pengiriman'] ?></td>
                            <td><?= $p['jumlah'] ?></td>
                            <td><?= $p['berat']/1000 ?> kg</td>
                            <td>Rp <?= $p['harga'] ?></td>
                            <td>Rp <?= $p['harga']*$p['berat']/1000 ?></td>
                            <td><?= $p['penerima'] ?></td>
                            <td><?= $p['keterangan'] ?></td>
                            <td><?= ($p['status'] == '0' ) ? 'Belum Lunas' : 'Lunas' ?></td>
                            <td>
                                <a href="<?= BASE_URL?>/dashboard/edit_pengiriman/<?= $p['id']?>"
                                    class="btn btn-success btn-sm">
                                    <i class="far fa-edit"></i>
                                </a>
                                <a href="<?= BASE_URL?>/dashboard/delete_pengiriman/<?= $p['id']?>"
                                    class="btn btn-danger btn-sm">
                                    <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addProduct" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog m-w-d modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Tambah Pengiriman</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo BASE_URL ?>/dashboard/pengiriman" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="product">Kode Pengiriman</label>
                                <input type="number" class="form-control" id="kode_pengiriman" name="kode"
                                    placeholder="Kode Pengiriman">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Jumlah</label>
                                <input type="number" class="form-control" placeholder="Jumlah" name="jumlah">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Berat (g)</label>
                                <input type="number" class="form-control" placeholder="Berat" name="berat">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Harga (Rp)</label>
                                <input type="number" class="form-control" placeholder="Harga" name="harga">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Penerima</label>
                                <input type="text" class="form-control" placeholder="Penerima" name="penerima">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Status Pembayaran</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    <option value="1">Lunas</option>
                                    <option value="0">Belum Lunas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Keterangan</label>
                                <textarea name="keterangan" class="form-control"></textarea>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" id="tambah" class="btn btn-primary">Simpan Data </button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="modal fade" id="rangetanggal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog m-w-d modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="exampleModalLabel">Print Data</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?php echo BASE_URL ?>/prints/range" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="product">Dari Tanggal</label>
                                <input type="date" class="form-control" name="by">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Sampai Tanggal</label>
                                <input type="date" class="form-control" name="end">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" name="submit" id="tambah" class="btn btn-primary">Print Data </button>
                </div>
            </form>
        </div>
    </div>
</div>