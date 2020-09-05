<div class="container mt-0 text-white">
    <div class="jumbotron jumbotron-fluid bg-primary rounded-top border border-danger p-0 mb-0 border-top-0 rounded">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <marquee behavior="" direction="">
                        <h5>www.a_sho.com</h5>
                    </marquee>
                </div>

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" style="background: #021e4f">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Konfirmasi</h4>
            </div>
            <div class="modal-body">
                <h5>yakin data ini akan <b>dihapus</b>?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
                <a class="btn btn-primary" id="btn-yes">Ya</a>
            </div>
        </div>

    </div>
</div>


</body>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="<?= base_url() . 'asset/js/jquery-1.12.4.min.js' ?>"></script>
<script src="<?= base_url() . 'asset/js/bootstrap.min.js' ?>"></script>

<script src="<?= base_url() . 'asset/DataTables/datatables.min.js' ?>"></script>
<script src="<?= base_url() . 'asset/dist/sweetalert2.all.min.js' ?>"></script>
<!-- <script src="<?//= base_url() . 'asset/dist/myscript.js' ?>"></script> -->

</html>





<script>
    const flashData = $('.flash-data').data('flashdata');
    if (flashData) {
        Swal.fire({
            title: '' + flashData,
            text: 'Berhasil',
            type: 'success'
        });
    }
    //hapus
    function set_url(url) {
        $('#btn-yes').attr('href', url);
    }
    $(document).ready(function() {
        $('#daftarpersonil').DataTable();
    });
    $(document).ready(function() {
        $('#claster_brg').DataTable();
    });
    $(document).ready(function() {
        $('#claster').DataTable();
    });
    $(document).ready(function() {
        $('#Datatabel').DataTable();
    });
    $(document).ready(function() {
        $('#Datatabel').DataTable();
    });
</script>