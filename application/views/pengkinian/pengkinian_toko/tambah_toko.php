<div class="container mt-0">
    <div class="row border border-danger bg-secondary border-top-0 m-0 border-bottom-0">
        <div class="col-md-2 mt-2 shadow ml-3 ">
            <div class="bg-secondary mb-5 ">

                <div class="card-body mb-4 mr-3 pl-0 ">


                    <div class="dropdown ">
                        <button class="btn btn-primary btn font-weight-bold dropdown-toggle fas fa-caret-down mr-3 pl-0 " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengkinian Data
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-primary font-weight-bold" href="<?= base_url('Pengkinian/Allpersonil') ?>">All personil</a>
                            <a class="dropdown-item text-primary font-weight-bold" href="<?= base_url('Pengkinian/clastertoko') ?>">Claster toko</a>
                            <a class="dropdown-item text-primary font-weight-bold" href="#">claster Barang</a>
                            <a class="dropdown-item text-primary font-weight-bold" href="<?= base_url('pengkinian/struktur_area') ?>">Struktur Area</a>

                        </div>
                    </div>





                </div>
            </div>


        </div>
        <div class="col mt-3 md-4 mb-2 bg-secondary ml-3 ">
            <div class="card mt-4 mb-3 ml-3 mr-4">
                <div class="card-header text-dark mt-0 ">
                    <h5 class="font-weight-bold">Tambah Data Toko</h5>
                    <a class="fas fa-backward float-right" href="<?= base_url('pengkinian/clastertoko') ?> ">Back</a>

                </div>
                <div class="card-body mb-4  ">

                    <form action="" method="post">


                        <div class="row">
                            <div class="col-md-8 mt-0">
                                <label for="kd_toko" class="font-weight-bold">kode toko*</label>
                                <input type="text" class="form-control form-control <?= form_error('kd_toko') ? 'is-invalid' : '' ?>" placeholder="" id="kd_toko" name="kd_toko" value="<?= set_value('kd_toko') ?>" autocomplete="off">

                                <div class="invalid-feedback">
                                    <?= form_error('kd_toko') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="nm_toko" class="font-weight-bold">Nama Toko*</label>
                                <input type="text" class="form-control form-control <?= form_error('nm_toko') ? 'is-invalid' : '' ?>" placeholder="nm_toko lengkap" id="nm_toko" name="nm_toko" value="<?= set_value('nm_toko') ?> " autocomplete="off">

                                <div class="invalid-feedback">
                                    <?= form_error('nm_toko') ?>
                                </div>


                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="zona" class="font-weight-bold">Zona*</label>

                                <input type="text" class="form-control form-control <?= form_error('zona') ? 'is-invalid' : '' ?>" placeholder="zona lengkap" id="zona" name="zona" value="<?= set_value('zona') ?> " autocomplete="off">

                                <div class="invalid-feedback">
                                    <?= form_error('zona') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="kcm" class="font-weight-bold">Kecamatan*</label>

                                <input type="text" class="form-control form-control <?= form_error('kcm') ? 'is-invalid' : '' ?>" placeholder="kcm lengkap" id="kcm" name="kcm" value="<?= set_value('kcm') ?> " autocomplete="off">

                                <div class="invalid-feedback">
                                    <?= form_error('kcm') ?>
                                </div>



                            </div>

                            <div class="col-md-8 mt-3">
                                <label for="kota" class="font-weight-bold">Kota*</label>
                                <input type="text" class="form-control form-control <?= form_error('kota') ? 'is-invalid' : '' ?>" placeholder="" id="kota" name="kota" value="<?= set_value('kota') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('kota') ?>
                                </div>

                            </div>

                            <div class="col-md-8 mt-3">

                                <button type="submit" name="tambah" class="btn btn-dark btn-flat "><i class="fa fa-paper-plane"></i>simpan</button>
                                <button type="Reset" class="btn btn-danger float-right    ">Reset</button>
                                <hr>
                            </div>



                        </div>
                </div>
                </form>
                <div class="alert alert-warning mb-0 text-center" role="alert">
                    info: isilah data dengan benar!
                </div>
            </div>

        </div>
    </div>

</div>