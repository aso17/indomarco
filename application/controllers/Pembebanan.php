<?php
class Pembebanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login');
        }
    }

    public function index()
    {
        $judul['judul'] = 'Pembebanan toko';
        $this->load->view('Templates/header', $judul);
        $this->load->view('pembebanan/index');
        $this->load->view('Templates/footer');
    }
}
