<div class="container">
    <div class="row border border-danger border-top-0 m-0 border-bottom-0 bg-secondary">
        <div class="col-md-4 mt-3 p-0">
            <div class=" bg-secondary mb-5 pb-5 pl-4 ">

                <div class="card ">
                    <div class="card">
                        <div class="card-header bg-success text-white font-weight-bold fas fa-list-ul">
                            Detail Personil
                        </div>
                        <ul class="list-group list-group-flush font-weight-bold fas fa-sort-amount-down">
                            <li class="list-group-item font-weight-bold">&middot;<?= $area['kd_toko'] ?> </li>
                            <li class="list-group-item">&middot;<?= $area['nama_toko'] ?> </li>
                            <li class="list-group-item">&middot;<?= $area['nama_as'] ?> </li>
                            <li class="list-group-item">&middot; <?= $area['nama_manager'] ?></li>
                            <li class="list-group-item">&middot; <?= $area['no_tlp'] ?></li>
                            <li class="list-group-item">&middot;<?= $area['email'] ?></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <div class="col mt-3 pl-2">


            <div class="card mt-0">
                <div class="card-header text-dark mt-0 ">
                    <h3 class="font-weight-bold">form input fisik tidak ada</h3>
                    <a class="fas fa-backward float-right" href="  ">Back</a>
                </div>
                <div class="card-body mb-4 pl-5">

                    <form action=" <?= base_url('Dokumen/tambah_nofisik') ?> " method="post">


                        <div class="row">
                            <div class="col-md-8 mt-0">
                                <label for="kd_toko" class="font-weight-bold">Kode toko*</label>
                                <select class="custom-select custom-select-sm  <?= form_error('kd_toko') ? 'is-invalid' : '' ?>  " name="kd_toko" id="kd_toko" autocomplete="off">
                                    <option value="<?= $area['id_toko']; ?>  "><?= $area['kd_toko'] ?></option>
                                    <div class="invalid-feedback">
                                        <?= form_error('nik') ?>
                                    </div>
                                </select>
                            </div>



                            <div class="col-md-8 mt-3">
                                <label for="nm_as" class="font-weight-bold">Nama AS*</label>
                                <select class="custom-select custom-select-sm  <?= form_error('nm_as') ? 'is-invalid' : '' ?>  " name="nm_as" id="nm_as">


                                    <option value="<?= $area['id_area'] ?> "><?= $area['nama_as'] ?></option>


                                    <div class="invalid-feedback">
                                        <?= form_error('nm_as') ?>
                                    </div>
                                </select>


                            </div>






                            <div class="col-md-8 mt-3">
                                <label for="tgl_input" class="font-weight-bold">Tanggal input*</label>
                                <input type="date" class="form-control form-control <?= form_error('tgl_input') ? 'is-invalid' : '' ?> " placeholder="bagian" id="tgl_input" name="tgl_input" value=" <?= set_value('tgl_input') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('tgl_input') ?>
                                </div>

                            </div>

                            <div class="col-md-8 mt-3">
                                <label for="no_doc" class="font-weight-bold">Nomer Dokumen*</label>
                                <input type="text" class="form-control form-control <?= form_error('no_doc') ? 'is-invalid' : '' ?>" placeholder="" id="no_doc" name="no_doc" value="<?= set_value('no_doc') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('no_doc') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="no_nrb" class="font-weight-bold">Nomer Nrb*</label>
                                <input type="text" class="form-control form-control <?= form_error('no_nrb') ? 'is-invalid' : '' ?>" placeholder="" id="no_nrb" name="no_nrb" value="<?= set_value('no_nrb') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('no_nrb') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="ket" class="font-weight-bold">Keterangan*</label>
                                <input type="text" class="form-control form-control <?= form_error('ket') ? 'is-invalid' : '' ?>" placeholder="" id="ket" name="ket" value="<?= set_value('ket') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('ket') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="nm_driver" class="font-weight-bold">Nama Driver*</label>
                                <input type="text" class="form-control form-control <?= form_error('nm_driver') ? 'is-invalid' : '' ?>" placeholder="" id="nm_driver" name="nm_driver" value="<?= set_value('nm_driver') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('nm_driver') ?>
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