</div>
<!-- Page content -->
</div>
<!-- Argon Scripts -->
<!-- Core -->
<script src="<?= BASEURL?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?= BASEURL?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
<!-- datatable -->
<script src="<?= BASEURL?>/assets/vendor/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= BASEURL?>/assets/vendor/dropzone/dist/min/dropzone.min.js"></script>
<!-- tags -->
<script src="<?= BASEURL ?>/assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
<!-- Argon JS -->
<script src="<?= BASEURL?>/assets/js/argon.js?v=1.1.0"></script>

<!-- sweeralert2 -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.tiny.cloud/1/5kcl3iu5k6wdcylov090mv7tajkluyz153f8wg5497p1zz4y/tinymce/5/tinymce.min.js"
    referrerpolicy="origin"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
AOS.init();
const flashData = $('.flash-data').data('flashdata');
if (flashData) {
    Swal.fire({
        title: 'JK Trans',
        text: flashData.pesan,
        icon: flashData.tipe,
        type: flashData.tipe
    })
};
</script>


</body>

</html>