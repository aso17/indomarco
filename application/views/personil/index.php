<div class="container">
    <div class="row border border-danger bg-secondary pl-2 pr-2 border-top-0 m-0 border-bottom-0">
        <div class="col mt-3  pb-5">
            <div class="card border-top-0  border-left-0  border-right-0 ">
                <div class="card-header bg-secondary text-white pb-0 ">
                    <h4 class="font-weight-bold mt-1">PT.INDOMARCO PRISMATAMA</h4>
                    <p class="font-weight-bold">GO26-Tangerang</p>
                    <h4 class="text-center mt-0">Daftar Personil Bagian Rcv </h4>
                    <p class=" float-right ">User : <?= $this->session->userdata('nik'); ?></p>

                    <br>
                    <br>
                    <p class=" float-right pr-0">date : <?= date('d.m.y'); ?></p>



                </div>
                <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
                <?php if ($this->session->flashdata('flash')) : ?>

                <?php endif; ?>

                <table class="table table-hover  " id="daftarpersonil">
                    <thead class="thead-info  boder-1">

                        <tr class=" ">
                            <th scope="col">No</th>
                            <th scope="col">Nik</th>
                            <th scope="col">Nama lengkap</th>
                            <th scope="col">Jabatan</th>
                            <th scope="col">Jobclass</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-primary     ">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1; ?>
                        <?php foreach ($tb_personil as $pers) : ?>
                            <tr>


                                <th scope="row" class=""><?= $i++ . '.'; ?></th>
                                <td class=""><?= $pers['nik']; ?></td>
                                <td><?= $pers['nama_lengkap']; ?></td>
                                <td><?= $pers['jabatan']; ?></td>
                                <td><?= $pers['jobclas']; ?></td>
                                <td><?= $pers['status']; ?></td>
                                <td> <a href="<?= base_url('personil/detail/') . $pers['id_personil'] ?>" class="font-weight-bold far fa-hand-pointer">Select</a> </td>

                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>

            </div>


        </div>

    </div>
</div>