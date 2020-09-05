<div class="container">
    <div class="row border border-danger bg-secondary border-top-0 m-0 border-bottom-0">

        <div class="col mt-3  pb-3">
            <div class="card   border-top-0  border-left-0  border-right-0 ">
                <div class="card-header bg-secondary text-white pb-0  ">
                    <h4 class="font-weight-bold mt-1">PT.INDOMARCO PRISMATAMA</h4>
                    <p class="font-weight-bold">GO26-Tangerang</p>
                    <h4 class="text-center mt-0">Daftar semua toko </h4>
                    <p class=" float-right ">User : <?= $this->session->userdata('nik'); ?></p>

                    <br>
                    <br>
                    <p class=" float-right pr-0">date : <?= date('d.m.y'); ?></p>



                </div>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>

                <?php endif; ?>

                <table class="table table-hover  " id="Datatabel">
                    <thead class="thead-info  boder-1">

                        <tr class=" ">
                            <th scope="col">No</th>
                            <th scope="col">kode toko</th>
                            <th scope="col">Nama toko</th>
                            <th scope="col">Nama As</th>
                            <th scope="col">Nama Am</th>
                            <th scope="col">No tlp As</th>
                            <th scope="col">email As</th>

                            <th scope="col" class="text-primary">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($area as $docu) : ?>
                            <tr>


                                <th scope="row" class=""><?= $i++ . '.'; ?></th>
                                <td class=""> <?= $docu['kd_toko']; ?> </td>
                                <td><?= $docu['kd_toko']; ?></td>
                                <td><?= $docu['nama_toko']; ?></td>
                                <td><?= $docu['nama_as']; ?></td>
                                <td><?= $docu['no_tlp']; ?></td>
                                <td><?= $docu['email']; ?></td>

                                <td> <a href="<?= base_url('Dokumen/doc_detail' . '/' . $docu['id_area']); ?>" class="font-weight-bold far fa-hand-pointer">Select</a> </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>


        </div>

    </div>
</div>