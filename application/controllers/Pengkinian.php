<?php
class Pengkinian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login/index');
            if (!$this->session->userdata('jabatan') == 1) {
            } else {
                redirect('home');
            }
        }
        $this->load->model('clastertoko_model');
        $this->load->model('Product_model');
        $this->load->model('personil_model');
        $this->load->model('LoginModel');
        $this->load->model('Bagian_model');
        $this->load->model('jabatan_model');
        $this->load->model('status_model');
        $this->load->model('Area_model');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        if ($this->session->userdata('jabatan') == 1) {

            $judul['judul'] = 'Pengkinian Data';
            $this->load->view('templates/header', $judul);
            $this->load->view('pengkinian/index');
            $this->load->view('templates/footer');
        } else {
            redirect('home');
        }
    }


    public function tambah()
    {


        $data['tb_jabatan'] = $this->jabatan_model->getAlljabatan();
        $data['tb_status'] = $this->status_model->getAllstatus();
        $data['tb_bagian'] = $this->Bagian_model->getAll_bagian();


        $judul['judul'] = 'Pengkinian Data';
        $this->form_validation->set_rules('nik', 'Nik', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jbtn', 'Jabatan', 'required');
        $this->form_validation->set_rules('bgn', 'Bagian', 'required');
        $this->form_validation->set_rules('job', 'jobclass', 'required');
        $this->form_validation->set_rules('sts', 'status', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $judul);
            $this->load->view('pengkinian/pengkinian_personil/tambah_personil', $data);
            $this->load->view('templates/footer');
        } else {
            $this->personil_model->tambahpersonil();
            $this->session->set_flashdata('flash', ' tambah personil');
            redirect('Pengkinian/allpersonil');
        }
    }






    public function Allpersonil()
    {

        $judul['judul'] = 'Pengkinian  Data';

        $data['tb_personil'] = $this->personil_model->getAllpersonil()->result_array();

        $this->load->view('templates/header', $judul);
        $this->load->view('pengkinian/pengkinian_personil/index', $data);
        $this->load->view('templates/footer');
    }
    public function editpersonil($id = null)
    {


        $judul['judul'] = 'pengkinian';
        $data['personil'] = $this->personil_model->getIdpersonil($id);
        $data['tb_jabatan'] = $this->jabatan_model->getAlljabatan();
        $data['tb_status'] = $this->status_model->getAllstatus();
        $data['tb_bagian'] = $this->Bagian_model->getAll_bagian();

        $this->form_validation->set_rules('nik', 'Nik', 'required|numeric');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('jbtn', 'Jabatan', 'required');
        $this->form_validation->set_rules('bgn', 'Bagian', 'required');
        $this->form_validation->set_rules('job', 'jobclass', 'required');
        $this->form_validation->set_rules('sts', 'status', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $judul);
            $this->load->view('pengkinian/pengkinian_personil/editpersonil', $data);
            $this->load->view('templates/footer');
        } else {
            $this->personil_model->ubahpersonil();
            $this->session->set_flashdata('flash', ' Ubah personil');
            redirect('Pengkinian/allpersonil');
        }
    }



    public function hapuspersonil($id)
    {

        $this->personil_model->hapusdatapersonil($id);
        $this->session->set_flashdata('flash', 'hapus data personil');
        redirect('pengkinian/pengkinian_personil/allpersonil');
    }

    public function clastertoko()
    {

        $judul['judul'] = 'Pengkinian Data';
        $data['tb_clastertoko'] = $this->clastertoko_model->getAlltoko();
        $this->load->view('templates/header', $judul);
        $this->load->view('pengkinian/pengkinian_toko/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah_toko()
    {
        $judul['judul'] = 'Pengkinian Data';
        $this->form_validation->set_rules('kd_toko', 'Kode', 'required');
        $this->form_validation->set_rules('nm_toko', 'Nama toko', 'required');
        $this->form_validation->set_rules('zona', 'Zona', 'required');
        $this->form_validation->set_rules('kcm', 'kecamatan', 'required');
        $this->form_validation->set_rules('kota', 'kota', 'required');


        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $judul);
            $this->load->view('pengkinian/pengkinian_toko/tambah_toko');
            $this->load->view('templates/footer');
        } else {
            $this->clastertoko_model->tambahtoko();
            $this->session->set_flashdata('flash', ' Tambah toko baru');
            redirect('Pengkinian/clastertoko');
        }
    }

    public function edit_toko($id = null)
    {
        $judul['judul'] = 'Pengkinian';
        $this->form_validation->set_rules('kd_toko', 'Kode', 'required');
        $this->form_validation->set_rules('nm_toko', 'Nama toko', 'required');
        $this->form_validation->set_rules('zona', 'Zona', 'required');
        $this->form_validation->set_rules('kcm', 'kecamatan', 'required');
        $this->form_validation->set_rules('kota', 'kota', 'required');

        if ($this->form_validation->run() == false) {
            $data['tb_toko'] = $this->clastertoko_model->getidtoko($id);
            $this->load->view('templates/header', $judul);
            $this->load->view('pengkinian/pengkinian_toko/edit_toko', $data);
            $this->load->view('templates/footer');
        } else {
            $this->clastertoko_model->ubahtoko();
            $this->session->set_flashdata('flash', 'ubah toko');
            redirect('pengkinian/clastertoko');
        }
    }
    public function  claster_barang()
    {
        $judul['judul'] = 'Pengkinian';
        $data['tb_product'] = $this->Product_model->getallproduct();
        $this->load->view('templates/header', $judul);
        $this->load->view('pengkinian/data_barang/index', $data);
        $this->load->view('templates/footer');
    }
    public function hapus_toko($id)
    {
        $this->clastertoko_model->hapustoko($id);
        $this->session->set_flashdata('flash', 'hapus toko');
        redirect('pengkinian/clastertoko');
    }

    public function struktur_area()
    {
        $judul['judul'] = 'pengkinian';
        $data['struktur'] = $this->Area_model->getAllarea();

        $this->load->view('templates/header', $judul);
        $this->load->view('pengkinian/struktur_area/index', $data);
        $this->load->view('templates/footer');
    }
}
