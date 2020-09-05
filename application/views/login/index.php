<!DOCTYPE html>
<html lang="en">

<head>

    <link rel="stylesheet" href="<?= base_url() . 'asset/css/bootstrap.min.css' ?>" <meta charset="UTF-8">

    <link rel="stylesheet" href="<?= base_url() . 'asset/DataTables/datatables.min.css' ?>" <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $judul; ?></title>
</head>

<body>
    <!-- headar -->
    <div class="container mt-4 text-white">
        <?php $this->session->userdata('nik') ?>
        <div class="jumbotron jumbotron-fluid bg-primary rounded-top border border-danger border-bottom-0 p-0 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col p-4 mt-3">
                        <h1 class="font-weight-bold"> MANAGEMAN PENGENDALIAN RCV</h1>
                        <p class="font-weight-bold p-0">G026-DC TANGERANG 1</p>
                        <p class=" ">Jalan Gatot Subroto, Kadu, Curug, Kadu, Kec. Curug, <br> Kota Tangerang, Banten 15810</p>
                    </div>
                    <div class="col-md-3 p-4 text-right">
                        <img src="<?= base_url() . 'asset/img/logo.JPG' ?> " style="height:100px" alt="" class="img-fluid">
                        <p class="font-bold mt-2">PT.INDOMARCO PRISMATAMA</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nav -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-warning border border-danger border-bottom-0 border-top-0 font-wheigt-bold">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-nav ">



                </div>
            </div>
        </nav>


    </div>
    <div class="container">
        <div class="row border border-danger border-top-0 m-0 border-bottom-0 bg-dark">
            <div class="col-md-4 mt-3 shadow">
                <div class="card text-white bg-success mb-5">

                    <div class="card-body mb-4">

                        <h5 class="card-title">Success card title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>


            </div>
            <div class="col mt-md-3">
                <div class="card bg-dark">
                    <div class="card-header bg-warning">
                        <H4 class="font-weight-bold">Halaman Login</H4>
                    </div>
                    <div class="card-body mb-0 col-md-offset-4 bg-primary">
                        <!-- form Login -->

                        <?= $this->session->flashdata('pesan'); ?>
                        <div class="container mx-auto">
                            <form action=" <?= base_url('login/index'); ?> " method="post">
                                <div class="form-group row">
                                    <label for="nik" class="col-sm-2 col-form-label font-weight-bold ">
                                        <h5 class="font-weight-bold ml-4">User :</h5>
                                    </label>
                                    <div class="col-sm-4 p-0">
                                        <input type="text" name="nik" class="form-control-sm  <?= form_error('user') ? 'is-invalid' : '' ?> " id="nik" value="<?= set_value('nik') ?>" autocomplete='off'>

                                        <div class="invalid-feedback font-weight-bold">
                                            <?= form_error('nik') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row mt-0">
                                    <label for="password" class="col-sm-2 col-form-label font-weight-bold ">
                                        <h6 class="font-weight-bold ">Password :</h6>
                                    </label>
                                    <div class="col-sm-4 mb-0 p-0">
                                        <input type="password" name="password" class="form-control-sm  <?= form_error('password') ? 'is-invalid' : '' ?> " id="password">
                                        <div class="invalid-feedback font-weight-bold">
                                            <?= form_error('password') ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="container ml-2">

                                    <div class="ml-5 mt-0 ">
                                        <div class="form-group row">
                                            <div class="col-sm-5 ml-5 p-0">
                                                <button class="btn btn-dark btn-lg-sm font-weight-bold" type="submit" name="login">Masuk</button>
                                                <button class="btn btn-dark btn-lg-sm ml-2 font-weight-bold sm " type="reset">Reset</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </form>
                        </div>
                    </div>
                    <div class="alert alert-warning mt-mt-0 text-center text-danger" role="alert">
                        info: isilah data dengan Benar!
                    </div>






                </div>

            </div>
        </div>

    </div>
    </div>

    </div>