<?php
class Login extends Ci_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->library('form_validation');
        $this->load->Model('LoginModel');
        $this->load->library('session');
    }

    public function index()
    {
        $data['user'] = $this->LoginModel->getAlluser();

        if ($this->session->userdata('nik')) {
            redirect('home');
        }
        $judul['judul'] = 'halaman Login';
        $this->form_validation->set_rules('nik', 'Nik', 'required|numeric');
        $this->form_validation->set_rules('password', 'Password', 'required|max_length[4]');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('login/index', $judul);
            $this->load->view('templates/footer');
        } else {
            $post = $this->input->post(null, true);
            if (isset($post['login'])) {
                $query = $this->LoginModel->login($post);
                if ($query->num_rows() > 0) {
                    $row = $query->row();

                    $setsession = [
                        'nik' => $row->nik,
                        'nama' => $row->nama,
                        'jabatan' => $row->id_jabatan,
                        'login' => 'akses'




                    ];

                    $this->session->set_userdata($setsession);
                    redirect('home/index');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
                    pasword salah!
                 </div>');
                    redirect('login');
                }
            }
        }
    }
    function logout()
    {
        $setsession = array('nik', 'jabatan');
        $this->session->unset_userdata($setsession);
        redirect('login/index');
    }
    public function getallcabang()
    {
    }
}
