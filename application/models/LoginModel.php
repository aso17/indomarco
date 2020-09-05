<?php
class LoginModel extends ci_Model
{
    public function __construct()

    {
        parent::__construct();
        $this->load->library('session');
    }
    public function login($post)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan=user.id_jabatan');
        $this->db->where('nik', $post['nik']);
        $this->db->where('password', sha1($post['password']));
        $query = $this->db->get();

        return $query;
        // $nik = htmlspecialchars($this->input->post('nik', true), ENT_QUOTES);
        // $password = $this->input->post(password_hash('password', true));
        // $tbuser = $this->db->get_where('user', ['nik' => $nik])->row_array();


        // if ($tbuser !== null) {

        //     if (password_verify($password, $tbuser['password'])) {

        //         redirect('Home/index');





        //         $data = [
        //             'nama' => $tbuser['nama'],
        //             'jabatan' => $tbuser['jabatan']

        //         ];
        //         $this->session->set_userdata($data);


        //     } else {
        //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        //             pasword salah!
        //           </div>');
        //         redirect('login');
        //     }
        // } else {
        //     $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
        //     belum terdaftar!
        //   </div>');
        //     redirect('login');
        // }
    }
    public function getAlluser()
    {
        return $query = $this->db->get('user')->num_rows();
    }
}
