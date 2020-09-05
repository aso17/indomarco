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
                    <h3 class="font-weight-bold">Form izin Dadakan</h3>
                    <a class="fas fa-backward float-right" href=" <?= base_url('personil/detail') . '/' . $tb_personil['id_personil']; ?> ">Back</a>
                </div>
                <div class="card-body mb-4 pl-5">

                    <form action="<?= base_url('personil/input_izin') ?> " method="post">
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
                                <label for="tgl_izin" class="font-weight-bold">Tanggal izin*</label>
                                <input type="date" class="form-control form-control <?= form_error('tgl_izin') ? 'is-invalid' : '' ?> " placeholder="bagian" id="tgl_izin" name="tgl_izin" value=" <?= set_value('tgl_izin') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('tgl_izin') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="kpr" class="font-weight-bold">Keperluan*</label>
                                <input type="text" class="form-control form-control <?= form_error('kpr') ? 'is-invalid' : '' ?>" placeholder="" id="kpr" name="kpr" value="<?= set_value('kpr') ?>" autocomplete="off">
                                <div class="invalid-feedback">
                                    <?= form_error('kpr') ?>
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