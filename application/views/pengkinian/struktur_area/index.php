<div class="container">
    <div class="row border border-danger bg-secondary border-top-0 m-0 border-bottom-0">
        <div class="col-md-2 mt-3 shadow ml-3">
            <div class=" bg-secondary mb-0 pb-0">

                <div class="card-body mb-4 mr-3 pl-0">




                    <div class="dropdown ">
                        <button class="btn btn-primary btn font-weight-bold dropdown-toggle mr-3 pr-0 fas fa-caret-down" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengkinian Data
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('Pengkinian/Allpersonil') ?>">All personil</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('Pengkinian/clastertoko') ?>">Claster toko</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href=" <?= base_url('pengkinian/claster_barang') ?> ">claster Barang</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="#">Struktur Area</a>

                        </div>
                    </div>



                </div>
            </div>


        </div>
        <div class="col mt-md-4 ">
            <div class="card">
                <div class="card-header mt-0  text-dark text-sanserif">
                    <H5 class="font-weight-bold mr-5">PT.INDOMARCO PRISMATAMA</H5>

                    <P class="font-weight-bold">G026-Tangerang</P>
                    <h4 class="font-weight-bold text-center mt-0">Stuktur area </h4>
                    <p class="float-right mb-3">User : <?= $this->session->userdata('nik') ?></p>
                    <button type="button" class="btn btn-primary text-dark"><a href="<?= base_url('Pengkinian/tambah') ?>" class="font-weight-bold text-white mb-0 fas fa-user-plus">Tambahkan</a></button>
                </div>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>

                <?php endif;
                ?>
                <table class="table table-hover text-dark " id="Datatabel">
                    <thead class="thead-info boder-1  text-dark font-weight-bold">

                        <tr>
                            <th scope="col">No</th>

                            <th scope="col">Nama toko</th>
                            <th scope="col">Nama As</th>
                            <th scope="col">Nama Manager</th>
                            <th scope="col">No telpon</th>
                            <th scope="col">email</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($struktur as $area) : ?>
                            <tr>


                                <th scope="row" class=""><?= $i++ . '.'; ?></th>

                                <td> <?= $area['nama_toko']; ?> </td>
                                <td><?= $area['nama_as'] ?></td>
                                <td><?= $area['nama_manager'] ?></td>
                                <td><?= $area['no_tlp'] ?></td>

                                <td><?= $area['email'] ?>

                                    <a title="Hapus" data-placement="right" class="badge badge-danger float-right far fa-trash-alt" data-toggle="modal" href="#myModal" onclick="set_url('<?= base_url('pengkinian/hapuspersonil') . '/' . $area['id_area'] ?>');">Hapus</a>
                                    <a href="<?= base_url('Pengkinian/edit_struktur_area') . '/' . $area['id_area']; ?>" class="  badge badge-success text-white float-right ml-1 fas fa-edit">edit</a>


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