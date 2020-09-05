<!DOCTYPE html>
<html lang="en">


<head>


    <link rel="stylesheet" href="<?= base_url() . 'asset/css/bootstrap.min.css' ?>" <meta charset="UTF-8">

    <link rel="stylesheet" href="<?= base_url() . 'asset/fontawesome/css/all.min.css' ?>" <meta charset="UTF-8">


    <link rel="stylesheet" href="<?= base_url() . 'asset/DataTables/datatables.min.css' ?>" <meta charset="UTF-8">

    <title><?= $judul; ?></title>
</head>

<body>
    <!-- headar -->
    <div class="container mt-4 text-white">
        <div class="jumbotron jumbotron-fluid bg-primary rounded-top border border-danger border-bottom-0 p-0 mb-0">
            <div class="container">
                <div class="row">
                    <div class="col p-4 mt-3">
                        <h1 class="font-weight-bold">MANAGEMAN PENGENDALIAN RCV</h1>
                        <p class="font-weight-bold p-2">G026-DC TANGERANG 1</p>
                        <p class=" ">Jalan Gatot Subroto, Kadu, Curug, Kadu, Kec. Curug, <br> Kota Tangerang, Banten 15810</p>

                    </div>
                    <div class="col-md-3 p-4 text-right">
                        <img src="<?= base_url() . 'asset/img/logo.JPG' ?> " style="height:100px" alt="" class="img-fluid">
                        <p class="font-bold mt-2">PT.INDOMARCO PRISMATAMA</p>

                        <h6 class="text-dark mb-0  pr-4 fas fa-user-astronaut">User : <?= $this->session->userdata('nik')  ?></h6>



                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- nav -->
    <div class="container">
        <!-- navbar utk officer -->
        <?php if ($this->session->userdata('jabatan') == 1) {
        ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning border border-danger border-bottom-0 border-top-0">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav mx-auto">

                        <a class="nav-link font-weight-bold fas fa-home  " href="<?= base_url('Home') ?>">HOME<span class="sr-only">(current)</span></a>

                        <a class="nav-link font-weight-bold ml-4 fas fa-sort-amount-down" href="<?= base_url('personil') ?>">PERSONIL</a>
                        <a class="nav-link font-weight-bold ml-5 fas fa-sort-amount-down " href="<?= base_url('Dokumen') ?> ">DOKUMEN</a>


                        <a class="nav-link font-weight-bold ml-5 fas fa-sort-amount-down" href="<?= base_url('Pengkinian') ?>">PENGKINIAN </a>
                        <a class="nav-link font-weight-bold ml-5 fas fa-sort-amount-down" href=" <?= base_url('Pembebanan') ?> ">PEMBEBANAN</a>
                        <a class="nav-link font-weight-bold ml-5 fas fa-sort-amount-down" href="<?= base_url('Laporan') ?>">LAPORAN</a>

                        <a class="nav-link font-weight-bold ml-5 text-left text-danger text-wrap fas fa-sign-out-alt " style="width: 6rem;" href="<?= base_url('Login/logout') ?>">LOGOUT</a>


                    </div>
                </div>
            </nav>
        <?php } ?>
        <!-- navbar utk cheker -->
        <?php if ($this->session->userdata('jabatan') == 2) {
        ?>
            <nav class="navbar navbar-expand-lg navbar-light bg-warning border border-dark border-bottom-5 border-top-0 text-uppercase">

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="navbar-nav  ml-5">

                        <a class="nav-link font-weight-bold mr-5 fas fa-home " href="<?= base_url('Home') ?>">Home <span class="sr-only">(current)</span></a><i class=""></i>

                        <a class="nav-link font-weight-bold mx-4 fas fa-sort-amount-down " href="<?= base_url('personil') ?>">Personil</a>
                        <a class="nav-link font-weight-bold mx-5 fas fa-sort-amount-down" href=" <?= base_url('Dokumen') ?> ">Dokumen Bermasalah</a>

                        <a class="nav-link font-weight-bold mx-5 fas fa-sort-amount-down" href="<?= base_url('Pembebanan') ?>">Pembebanan toko</a>

                        <a class="nav-link font-weight-bold text-danger mx-0 fas fa-sign-out-alt" href="<?= base_url('login/logout') ?>">Logout</a>



                    </div>
                </div>
            </nav>
        <?php } ?>

    </div>