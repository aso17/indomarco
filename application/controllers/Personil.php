<?php
class Personil extends CI_controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login/index');
        }
        $this->load->model('personil_model');
        $this->load->model('Bagian_model');
        $this->load->model('shif_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }
    public function index()
    {
        $judul['judul'] = 'Personil';
        $data['tb_personil'] = $this->personil_model->getAllpersonil()->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('personil/index', $data);
        $this->load->view('templates/footer');
    }

    public function daftar()
    {
        $judul['judul'] = 'Personil';
        $data['tb_personil'] = $this->personil_model->getAllpersonil();
        $this->load->view('templates/header', $judul);
        $this->load->view('personil/daftar', $data);
        $this->load->view('templates/footer');
    }
    public function izin_mendadak($id = null)
    {
        $data['tb_personil'] = $this->personil_model->getIdpersonil($id);
        $data['tb_shif'] = $this->shif_model->getallshif();

        $judul['judul'] = 'Personil';
        $this->load->view('templates/header', $judul);

        $this->load->view('personil/aksi/input_izin', $data);

        $this->load->view('templates/footer');
    }
    public function detail($id = null)
    {
        $data['tb_personil'] = $this->personil_model->getIdpersonil($id);
        $data['tb_shif'] = $this->shif_model->getallshif();

        $judul['judul'] = 'Personil';
        $this->load->view('templates/header', $judul);
        $this->load->view('personil/aksi/index', $data);
        $this->load->view('templates/footer');
    }
    public function input_izin($id = null)
    {
        $data['tb_personil'] = $this->personil_model->getIdpersonil($id);
        $data['tb_shif'] = $this->shif_model->getallshif();
        $judul['judul'] = 'Personil';
        $this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('shif', 'Shif', 'required');
        $this->form_validation->set_rules('tgl_izin', 'Tanggal', 'required');
        $this->form_validation->set_rules('kpr', 'keperluan', 'required');
        $this->form_validation->set_rules('ket', 'keterangan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $judul);
            $this->load->view('personil/aksi/input_izin', $data);
            $this->load->view('templates/footer');
        } else {
            $this->personil_model->tambah_izin($id);
            $this->session->set_flashdata('flash', 'izin mendadak');
            redirect('personil/index', $data);
        }
    }
    public function input_telat($id = null)
    {
        $data['tb_personil'] = $this->personil_model->getIdpersonil($id);
        $data['tb_shif'] = $this->shif_model->getallshif();
        $judul['judul'] = 'Personil';
        $this->form_validation->set_rules('nik', 'nik', 'required');
        $this->form_validation->set_rules('shif', 'Shif', 'required');
        $this->form_validation->set_rules('tgl_telat', 'Tanggal', 'required');
        $this->form_validation->set_rules('lm_telat', 'lama Telat', 'required');
        $this->form_validation->set_rules('alasan', 'Alasan', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $judul);
            $this->load->view('personil/aksi/input_telat', $data);
            $this->load->view('templates/footer');
        } else {
            $this->personil_model->tambah_telat($id);
            $this->session->set_flashdata('flash', 'persnil telat');
            redirect('personil/index');
        }
    }
}
