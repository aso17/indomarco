<div class="container">
    <div class="row border border-danger border-top-0 m-0 border-bottom-0 bg-secondary ">
        <div class="col-md-3 mt-3 shadow ml-0  mx-0">

            <div class=" bg-secondary mb-0 pb-5 pl-0 pr-0 ml-0 ">

                <div class="card mb-5 ">
                    <div class="card pb-0 mb-0">
                        <div class="card-header bg-success text-white font-weight-bold fas fa-list-ul">
                            Detail documen toko
                        </div>

                        <ul class="list-group list-group-flush font-weight-bold fas fa-sort-amount-down ">

                            <li class="list-group-item font-weight-bold">&middot; <?= $area['kd_toko']; ?></li>

                            <li class="list-group-item">&middot; <?= $area['nama_toko']; ?></li>
                            <li class="list-group-item">&middot; <?= $area['nama_as']; ?></li>
                            <li class="list-group-item">&middot; <?= $area['nama_manager']; ?></li>
                            <li class="list-group-item">&middot; <?= $area['no_tlp']; ?></li>
                            <li class="list-group-item ">&middot; <?= $area['email']; ?></li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>


        <div class=" col mt-3 md-4 pl-0 pr-0 bg-white mr-3 mx-0">
            <div class="card ">


                <nav class="navbar navbar-expand-lg navbar-light bg-success">

                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav text-center mx-auto">
                            <li class="nav-item mr-5">
                                <a class="nav-link font-weight-bold text-white fas fa-plus-square" href=" <?= base_url('Dokumen/input/') . $area['id_area']; ?> ">Fisik Tidak ada<span class="sr-only">(current)</span></a>

                            </li>
                            <li class="nav-item mr-5">
                                <a class="nav-link font-weight-bold text-white fas fa-plus-square" href="<?= base_url('Dokumen/no_fisik/')   ?>">Fisik ada Ttd tidak ada<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item mr-5">
                                <a class="nav-link font-weight-bold text-white fas fa-plus-square" href="#">Tidak ada Bpd</a>
                            </li>


                        </ul>
                    </div>
                </nav>
            </div>
            <a class="fas fa-backward float-right mr-4" href="<?= base_url('personil') ?> ">Back</a>








        </div>


    </div>

</div>