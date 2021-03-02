<div class="row">
    <div class="col">
        <div class="card">
            <!-- Card header -->
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0">Edit Blog</h3>
                <div class=""></div>
                <div class="">
                </div>
            </div>
            <br>
            <form action="<?php echo BASE_URL ?>/dashboard/edit_pengiriman/<?= $data['pengiriman']['id'] ?>"
                method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="product">Kode Pengiriman</label>
                                <input type="text" class="form-control" id="kode_pengiriman" name="kode"
                                    placeholder="Kode Pengiriman" value="<?= $data['pengiriman']['kode_pengiriman'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Jumlah</label>
                                <input type="number" class="form-control" placeholder="Jumlah" name="jumlah"
                                    value="<?= $data['pengiriman']['jumlah'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Berat (g)</label>
                                <input type="number" class="form-control" placeholder="Berat" name="berat"
                                    value="<?= $data['pengiriman']['berat'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Harga</label>
                                <input type="text" class="form-control" placeholder="Harga" name="harga"
                                    value="<?= $data['pengiriman']['harga'] ?>">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Penerima</label>
                                <input type="text" class="form-control" placeholder="Penerima" name="penerima"
                                    value="<?= $data['pengiriman']['penerima'] ?>">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label">Status Pembayaran</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                    <option value=""></option>
                                    <option value="1" <?= ($data['pengiriman']['status'] == 1) ? 'selected' : '' ?>>
                                        Lunas
                                    </option>
                                    <option value="0" <?= ($data['pengiriman']['status'] == 0) ? 'selected' : '' ?>>
                                        Belum Lunas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-control-label">Keterangan</label>
                                <textarea name="keterangan"
                                    class="form-control"><?= $data['pengiriman']['keterangan'] ?></textarea>
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