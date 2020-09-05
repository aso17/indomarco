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
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="#">claster Barang</a>
                            <a class="dropdown-item text-primary font-weight-bold fa fas-list" href="<?= base_url('pengkinian/struktur_area') ?>">Struktur Area</a>

                        </div>
                    </div>



                </div>
            </div>


        </div>
        <div class="col mt-md-4 ">
            <div class="card">
                <div class="card-header mt-0 text-dark text-sanserif">
                    <H5 class="font-weight-bold mr-5">PT.INDOMARCO PRISMATAMA</H5>

                    <P class="font-weight-bold">G026-Tangerang</P>
                    <h4 class="font-weight-bold text-center mt-0">Claster Barang</h4>
                    <p class="float-right mb-3">User : <?= $this->session->userdata('nik') ?></p>
                    <button type="button" class="btn btn-primary text-dark"><a href="<?= base_url('Pengkinian/tambah') ?>" class="font-weight-bold text-white mb-0 fas fa-user-plus">Tambah Data Barang</a></button>
                </div>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>

                <?php endif; ?>

                <table class="table table-hover text-dark bg-" id="claster_brg">
                    <thead class="thead-info boder-1  text-dark font-weight-bold">

                        <tr>
                            <th scope="col">No</th>

                            <th scope="col">Plu</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">size</th>
                            <th scope="col">Kemasan</th>
                            <th scope="col">Fruc_Carton</th>
                            <th scope="col">Harga/item</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>

                        <?php foreach ($tb_product as $prodc) :  ?>
                            <tr>


                                <th scope="row" class=""><?= $i++ . '.'; ?></th>
                                <td><?= $prodc['plu']; ?></td>
                                <td><?= $prodc['nm_product']; ?></td>
                                <td><?= $prodc['size']; ?></td>
                                <td><?= $prodc['kemasan']; ?></td>
                                <td><?= $prodc['fruc_crtn']; ?></td>
                                <td><?= $prodc['harga']; ?>


                                    <a href="<?= base_url('Pengkinian/hapuspersonil')  ?> " class=" badge badge-danger float-right ml-1 far fa-trash-alt text-white" onclick="return confirm('yakin akan di hapus ?'); ">hapus</a>
                                    <a href="<?= base_url('Pengkinian/editpersonil')  ?>" class=" badge badge-success text-white float-right ml-1 fas fa-edit">edit</a>


                                </td>
                            </tr>
                        <?php endforeach; ?>


                    </tbody>


                </table>

            </div>

        </div>
    </div>

</div>