<div class="container">
    <div class="row border border-danger bg-secondary border-top-0 m-0 border-bottom-0">
        <div class="col-md-2 mt-0 pb-5 pl-0 mb-5">
            <div class=" bg-secondary mb-5 ">

                <div class="card-body mb-4 mt-0 pb-5 ml-2  ">
                    <div class="dropdown ">
                        <button class="btn btn-primary btn  font-weight-bold dropdown-toggle fas fa-caret-down" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Laporan Bagian Rcv
                        </button>
                        <div class="dropdown-menu bg-white" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-primary font-weight-bold mr-3 pr-0 fa fas-list" href="<?= base_url('Laporan/lap_nofisik') ?>">Laporan fisik tidak ada</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('Personil/cuti_mendadak') ?>">Laporan Salah Barang</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('Personil/cuti_mendadak') ?>">laporan Barang Lebih</a>



                        </div>
                    </div>






                </div>
            </div>


        </div>
        <div class="col mt-md-4 bg-secondary pr-3 pb-5 pt-4 mr-3 ml-5 border-top-0 border-bottom-0  ">
            <div class="card ">
                <div class="card-header font-weight-bold ">
                    <h5> Cetak Laporan Fisik Dari Toko tidak Ada</h5>

                </div>
                <div class=" card mt-3 shadow ">
                    <form method="post" action="<?= base_url('Laporan/cetak_tgl') ?>">
                        <div class="form">
                            <div class="form-group col-md-4 sm">
                                <label class="font-weight-bold" for="tgl_1">Dari Tanggal</label>
                                <input type="date" name="tgl_1" class="form-control" id="tgl_1">
                            </div>
                            <div class="form-group col-md-4">
                                <label class="font-weight-bold" for="tgl_2">Sampai tanggal</label>
                                <input type="date" name="tgl_2" class="form-control" id="tgl_2">
                            </div>
                            <input type="submit" class="btn ml-3 mb-2 mt-0 btn-outline-secondary font-weight-bold fas fa-print " value="Print preview">
                            <input type="reset" class="btn ml-3 mb-2 mt-0 btn-outline-danger font-weight-bold fas fa-print " value="Reset">
                    </form>
                </div>
            </div>

        </div>
    </div>

</div>
</div>