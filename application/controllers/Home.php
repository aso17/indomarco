<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (empty($this->session->userdata('login'))) {
            redirect('login/index');
        }
    }
    public function index()
    {


        $judul['judul'] = 'Home';
        $this->load->view('templates/header', $judul);
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
