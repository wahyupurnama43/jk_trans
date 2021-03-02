<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL?>/assets/css/argon.css?v=1.1.0" type="text/css">
    <!-- data tables -->
    <link rel="stylesheet" href="<?= BASEURL ?>/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css" />
    <title>Print Data</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">DATA PENGIRIMAN JK TRANS</h1>
        <br><br>
        <table class="table table-flush text-center" id="datatable-basic">
            <thead class="thead-light">
                <tr>
                    <th>id</th>
                    <th>Kode Pengiriman</th>
                    <th>Jumlah Barang</th>
                    <th>Berat</th>
                    <th>Harga</th>
                    <th>Penerima</th>
                    <th>Keterangan</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                <?php foreach ($data['pengiriman'] as $p): ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $p['kode_pengiriman'] ?></td>
                    <td><?= $p['jumlah'] ?></td>
                    <td><?= $p['berat'] ?></td>
                    <td><?= $p['harga'] ?></td>
                    <td><?= $p['penerima'] ?></td>
                    <td><?= $p['keterangan'] ?></td>
                    <td><?= ($p['status'] == '0' ) ? 'Belum Lunas' : 'Lunas' ?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
<script>
window.print();
</script>
<script src="<?= BASEURL?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= BASEURL?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- datatable -->
<script src="<?= BASEURL?>/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>

</html>