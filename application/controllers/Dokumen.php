<?php
class Dokumen extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
        $this->load->model('Area_model');
        $this->load->model('clastertoko_model');
        $this->load->model('Dokumen_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $judul['judul'] = 'Dokumen';
        $data['area'] = $this->Area_model->getAllarea();
        $this->load->view('Templates/header', $judul);
        $this->load->view('dokumen/index', $data);
        $this->load->view('Templates/footer');
    }
    public function doc_detail($id)
    {
        $judul['judul'] = 'Dokumen';
        $data['area'] = $this->Area_model->getidarea($id);
        $this->load->view('templates/header', $judul);
        $this->load->view('dokumen/doc_aksi/index', $data);
        $this->load->view('templates/footer');
    }
    public function input($id)
    {
        $judul['judul'] = 'Dokumen';
        $data['area'] = $this->Area_model->getidarea($id);
        $this->load->view('templates/header', $judul);
        $this->load->view('Dokumen/doc_aksi/input_nofisik', $data);
        $this->load->view('templates/footer');
    }
    public function tambah_nofisik($id = null)
    {

        $judul['judul'] = '';
        $data['area'] = $this->Area_model->getidarea($id);
        $this->form_validation->set_rules('kd_toko', 'Kode toko', 'required');
        $this->form_validation->set_rules('nm_as', 'nama as', 'required');
        $this->form_validation->set_rules('tgl_input', 'Tanggal', 'required');
        $this->form_validation->set_rules('no_doc', 'Nomer Dokumen', 'required');
        $this->form_validation->set_rules('no_nrb', 'Nomer Nrb', 'required');
        $this->form_validation->set_rules('ket', 'keterangan', 'required');
        $this->form_validation->set_rules('nm_driver', 'nama driver', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $judul);
            $this->load->view('Dokumen/doc_aksi/input_nofisik', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dokumen_model->tambah($id);
            $this->session->set_flashdata('flash', 'input fisik tidak ada');
            redirect('Dokumen/index', $data);
        }
    }
}
