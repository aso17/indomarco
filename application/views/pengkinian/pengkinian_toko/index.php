<div class="container">
    <div class="row border border-danger bg-secondary border-top-0 m-0 border-bottom-0">
        <div class="col-md-2 mt-3 shadow ml-3">
            <div class=" bg-white mb-5">

                <div class="card-body bg-secondary pl-1 mb-4">

                    <div class="dropdown ">
                        <button class="btn btn-primary  font-weight-bold dropdown-toggle  mr-3 pr-0 fas fa-caret-down" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pengkinian Data
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item text-primary font-weight-bold" href="<?= base_url('Pengkinian/Allpersonil') ?>">All personil</a>
                            <a class="dropdown-item text-primary font-weight-bold" href="<?= base_url('Pengkinian/clastertoko') ?>">Claster toko</a>
                            <a class="dropdown-item text-primary font-weight-bold" href="<?= base_url('Pengkinian/claster_barang') ?>">claster Barang</a>
                            <a class="dropdown-item text-primary font-weight-bold" href="<?= base_url('pengkinian/struktur_area') ?>">Struktur Area</a>

                        </div>
                    </div>

                </div>
            </div>


        </div>
        <div class="col mt-md-4">
            <div class="card">
                <div class="card-header">
                    <H5 class="font-weight-bold mr-5">PT.INDOMARCO PRISMATAMA</H5>
                    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                    <?php if ($this->session->flashdata('flash')) : ?>

                    <?php endif; ?>
                    <P class="font-weight-bold">G026-Tangerang</P>
                    <p class=" float-right">User : <?= $this->session->userdata('nik'); ?></p>
                    <h5 class="font-weight-bold mr-5  text-center mt-0">Claster Toko</h5>
                    <button type="button" class="btn btn-primary text-dark"><a href="<?= base_url('Pengkinian/tambah_toko') ?>" class="font-weight-bold text-white mb-0 fas fa-user-plus">+Tambahkan Data baru</a></button>
                </div>
                <table class="table" id="claster">
                    <thead class="thead-light">
                        <tr>
                            <th scope="col">NO</th>
                            <th scope="col">Kode toko</th>
                            <th scope="col">Nama Toko</th>
                            <th scope="col">Zona</th>
                            <th scope="col">Kecamatan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($tb_clastertoko as $clas) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?>.</th>
                                <td><?= $clas['kd_toko']; ?></td>
                                <td><?= $clas['nama_toko']; ?></td>
                                <td><?= $clas['zona']; ?></td>
                                <td><?= $clas['kecamatan']; ?>

                                    <a title="Hapus" data-placement="right" class="badge badge-danger float-right far fa-trash-alt" data-toggle="modal" href="#myModal" onclick="set_url('<?= base_url('pengkinian/hapus_toko') . '/' . $clas['id_toko'] ?>');">Hapus</a>
                                    <a href=" <?= base_url('pengkinian/edit_toko') . '/' . $clas['id_toko']; ?> " class="badge badge-primary float-right ml-1 fas fa-edit">Edit</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>


            </div>

        </div>
    </div>

</div>