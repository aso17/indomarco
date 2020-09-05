<div class="container mt-0">
    <div class="row border border-danger bg-secondary border-top-0 m-0 border-bottom-0">
        <div class="col-md-2 mt-3 shadow ml-3  ">
            <div class=" bg-secondary mb-5">

                <div class="card-body mb-4 mr-3 pl-0">


                    <div class="dropdown ">
                        <button class="btn btn-primary btn font-weight-bold dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengkinian Data
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('Pengkinian/Allpersonil') ?>">All personil</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('Pengkinian/clastertoko') ?>">Claster toko</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href=" <?= base_url('pengkinian/claster_barang') ?> ">claster Barang</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('pengkinian/struktur_area') ?>">Struktur Area</a>

                        </div>
                    </div>





                </div>
            </div>


        </div>
        <div class="col mt-3 md-4 mb-2">
            <div class="card mt-4 mb-3 ml-3 mr-3">
                <div class="card-header bg-dark text-white mt-0 ">
                    <h5 class="font-weight-bold">Ubah Data Personil</h5>

                </div>
                <div class="card-body mb-4 pl-5">
                    <a class="fas fa-backward float-right" href="<?= base_url('pengkinian/allpersonil') ?> ">Back</a>


                    <form action="" method="post">
                        <input type="hidden" name="nik" value="<?= $personil['nik']; ?> ">
                        <div class="row">
                            <div class="col-md-8 mt-0">
                                <label for="nik" class="font-weight-bold">Nik*</label>
                                <input type="text" class="form-control form-control <?= form_error('nik') ? 'is-invalid' : '' ?>" placeholder="" id="nik" name="nik" value="<?= $personil['nik']; ?>" autocomplete="off">

                                <div class="invalid-feedback">
                                    <?= form_error('nik') ?>
                                </div>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="nama" class="font-weight-bold">Nama Lengkap*</label>
                                <input type="text" class="form-control form-control <?= form_error('nama') ? 'is-invalid' : '' ?>" placeholder="nama lengkap" id="nama" name="nama" value="<?= $personil['nama_lengkap']; ?> " autocomplete="off">

                                <div class="invalid-feedback">
                                    <?= form_error('nama') ?>
                                </div>


                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="jbtn" class="font-weight-bold">jabatan*</label>

                                <select class="custom-select custom-select-sm  <?= form_error('jbtn') ? 'is-invalid' : '' ?>  " name="jbtn" id="jbtn" autocomplete="off">
                                    <?php foreach ($tb_jabatan as $j) : ?>
                                        <?php if ($j['id_jabatan'] == $personil['id_jabatan']) : ?>
                                            <option value="<?= $j['id_jabatan']; ?>  " selected><?= $j['jabatan']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $j['id_jabatan']; ?>">
                                                <?= $j['jabatan']; ?>
                                            </option>

                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                    <div class="invalid-feedback">
                                        <?= form_error('jbtn') ?>
                                    </div>
                                </select>

                            </div>
                            <div class="col-md-8 mt-3">
                                <label for="sts" class="font-weight-bold">Status*</label>

                                <select class="custom-select custom-select-sm  <?= form_error('sts') ? 'is-invalid' : '' ?>  " name="sts" id="sts">
                                    <?php foreach ($tb_status as $s) : ?>
                                        <?php if ($s['id_status'] == $personil['id_status']) : ?>
                                            <option value="<?= $s['id_status']; ?>" selected><?= $s['status']; ?></option>
                                        <?php else : ?>
                                            <option value="<?= $s['id_status']; ?>  "> <?= $s['status']; ?></option>

                                        <?php endif; ?>

                                    <?php endforeach; ?>

                                    <?= form_error('sts') ?>
                            </div>
                            </select>



                        </div>
                        <div class="col-md-8 mt-3">
                            <label for="bgn" class="font-weight-bold">Bagian*</label>
                            <select class="custom-select custom-select-sm  <?= form_error('bgn') ? 'is-invalid' : '' ?>  " name="bgn" id="bgn">
                                <?php foreach ($tb_bagian as $b) : ?>
                                    <?php if ($b['id_bagian'] == $personil['id_bagian']) : ?>
                                        <option value="<?= $b['id_bagian']; ?>" selected><?= $b['bagian']; ?></option>
                                    <?php else : ?>
                                        <option value="<?= $b['id_bagian']; ?>  "> <?= $b['bagian']; ?></option>

                                    <?php endif; ?>

                                <?php endforeach; ?>

                                <div class="invalid-feedback">
                                    <?= form_error('bgn') ?>
                                </div>
                            </select>

                        </div>
                        <div class="col-md-8 mt-3">
                            <label for="job" class="font-weight-bold">Jobclass*</label>
                            <input type="text" class="form-control form-control <?= form_error('job') ? 'is-invalid' : '' ?>" placeholder="" id="job" name="job" value="<?= $personil['jobclas']; ?>" autocomplete="off">
                            <div class="invalid-feedback">
                                <?= form_error('job') ?>
                            </div>

                        </div>

                        <div class="col-md-8 mt-3">

                            <button type="submit" name="ubah" class="btn btn-primary btn-flat "><i class="fa fa-paper-plane"></i>Update</button>
                            <button type="button" class="btn btn-danger float-right"> <a href="<?= base_url('Pengkinian/Allpersonil') ?>">Cancel</a> </button>
                            <hr>
                        </div>



                </div>
            </div>
            </form>
            <div class="alert alert-danger mb-0 text-center" role="alert">
                info: cek pastikan kebali!
            </div>
        </div>

    </div>
</div>

</div>