<div class="container">
    <div class="row border border-danger bg-secondary border-top-0 m-0 border-bottom-0">
        <div class="col-md-2 mt-0 pb-5 pl-0">
            <div class=" bg-secondary mb-5">

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
        <div class="col mt-md-3 bg-white  mr-3 ml-5 border-top-0 border-bottom-0">
            <div class="card shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="">PT.INDOMARCO PRISMATAMA</h5>
                        <P>G026-Tangerang 1</P>
                        <a href="<?= base_url('Laporan/cetak_pdf/') . $tgl1 . '/' . $tgl2 ?>" target="_blank">
                            <botton class=" btn btn-outline-secondary fa fas-print  text-dark float-right "><i class="fas fa-file-pdf"></i>Cetak PDF </botton>
                        </a>
                        <h5 class="text-center">Laporan Fisik Tidak Ada</h5>
                        <div class="col-md-3  mx-auto mt-3">


                        </div>
                        <table class="table table-hover text-dark " id="Datatabel">

                            <thead class="thead-info boder-1  text-dark font-weight-bold">

                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama toko</th>
                                    <th scope="col">Nama As</th>
                                    <th scope="col">No TTd</th>
                                    <th scope="col">No NRB</th>
                                    <th scope="col">Tangal Input</th>
                                    <th scope="col">Keterangan</th>
                                    <th scope="col">Nama Driver</th>


                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($nofisik as $no) : ?>
                                    <tr>


                                        <th scope="row" class=""><?= $i++ . '.'; ?></th>

                                        <td><?= $no->nama_toko; ?></td>
                                        <td><?= $no->nama_as; ?></td>
                                        <td><?= $no->no_ttd; ?></td>
                                        <td><?= $no->no_nrb; ?></td>
                                        <td><?= $no->tgl_input; ?></td>
                                        <td><?= $no->keterangan; ?></td>
                                        <td><?= $no->nama_driver; ?></td>






                                        </td>

                                    </tr>

                                <?php endforeach; ?>
                            </tbody>


                        </table>

                    </div>

                </div>
            </div>

        </div>
    </div>
</div>