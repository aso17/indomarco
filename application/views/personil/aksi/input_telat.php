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
                            <li class="list-group-item font-weight-bold">&middot; <?= $tb_personil['nik']; ?></li>
                            <li class="list-group-item">&middot; <?= $tb_personil['nama_lengkap']; ?></li>
                            <li class="list-group-item">&middot; <?= $tb_personil['bagian']; ?></li>
                            <li class="list-group-item">&middot; <?= $tb_personil['jabatan']; ?></li>
                            <li class="list-group-item">&middot; <?= $tb_personil['jobclas']; ?></li>
                            <li class="list-group-item">&middot; <?= $tb_personil['status']; ?></li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <div class="col mt-3 pl-2">


            <div class="card mt-0">
                <div class="card-header text-dark mt-0 ">
                    <h4 class="font-weight-bold">Form Input Telat</h4>
                    <a class="fas fa-backward float-right" href=" <?= base_url('personil/detail') . '/' . $tb_personil['id_personil']; ?> ">Back</a>
                </div>
                <div class="card-body mb-4 pl-5">

                    <form action="<?= base_url('personil/input_telat') ?> " method="post">
                        <?php //validation_errors() 
                        ?>

                        <div class="row">
                            <div class="col-md-8 mt-0">
                                <label for="nik" class="font-weight-bold">Nik*</label>
                                <select class="custom-select custom-select-sm  <?= form_error('nik') ? 'is-invalid' : '' ?>  " name="nik" id="nik" autocomplete="off">


                                    <option value=" <?= $tb_personil['id_personil']; ?> "><?= $tb_personil['nik']; ?></option>


                                    <div class="invalid-feedback">
                                        <?= form_error('nik') ?>
                                    </div>
                                </select>



                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="shif" class="font-weight-bold">shif*</label>
                                <select class="custom-select custom-select-sm  <?= form_error('shif') ? 'is-invalid' : '' ?>  " name="shif" id="shif">
                                    <option selected>pilih</option>
                                    <?php foreach ($tb_shif as $s) : ?>
                                        <option value=" <?= $s['id_shif']; ?> "><?= $s['shif']; ?></option>

                                    <?php endforeach; ?>
                                    <div class="invalid-feedback">
                                        <?= form_error('shif') ?>
                                    </div>
                                </select>

                            </div>


                            <div class="col-md-8 mt-3">
                                <label for="tgl_telat" class="font-weight-bold">Tanggal Telat*</label>
                                <input type="date" class="form-control form-control <?= form_error('tgl_telat') ? 'is-invalid' : '' ?> " placeholder="bagian" id="tgl_telat" name="tgl_telat" value=" <?= set_value('tgl_telat') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('tgl_telat') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="lm_telat" class="font-weight-bold">Lama Telat*</label>
                                <input type="text" class="form-control form-control <?= form_error('lm_telat') ? 'is-invalid' : '' ?>" placeholder="" id="lm_telat" name="lm_telat" value="<?= set_value('lm_telat') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('lm_telat') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="alasan" class="font-weight-bold">Alasan*</label>
                                <input type="text" class="form-control form-control <?= form_error('alasan') ? 'is-invalid' : '' ?>" placeholder="" id="alasan" name="alasan" value="<?= set_value('alasan') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('alasan') ?>
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