<div class="container">
    <?php $this->session->userdata('nik') ?>
    <div class="row border border-danger border-top-0 m-0 border-bottom-0 bg-dark">
        <div class="col-md-4 mt-3 shadow mb-5">
            <div class="card text-white bg-success mb-5">

                <div class="card-body mb-5">
                    <h5 class="card-title"></h5>
                    <p class="card-text"><i class="fas fa-microchip"></i></p>
                </div>
            </div>


        </div>
        <div class="col mt-md-3">
            <div class="card">
                <div class="card-body mb-4">
                    <h5 class="card-title"></h5>

                    <?php $data['user'] = $this->db->get_where(['user'], ['nama' => $this->session->userdata('nama')])->row_array(); ?>
                    <h5 class="card-text font-weight-bold">Selamat Datang <?= '' . $data['user']['nama']; ?></h5>
                    <a href="#" class="btn btn-primary btn-group-sm mt-5">read more</a>
                </div>
            </div>

        </div>
    </div>

</div>