<?php
class personil_model extends CI_model
{
    public function getAllpersonil()
    {
        $this->db->select('*');
        $this->db->from('tb_personil');
        $this->db->join('tb_bagian', 'tb_bagian.id_bagian=tb_personil.id_bagian');
        $this->db->join('tb_status', 'tb_status.id_status=tb_personil.id_status');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan=tb_personil.id_jabatan');


        $query = $this->db->get();
        return $query;
    }


    public function tambahpersonil()
    {
        $this->db->select('*');
        //$this->db->from('tb_personil');
        $this->db->join('tb_bagian', 'tb_bagian.id_bagian=tb_personil.id_bagian');
        $this->db->join('tb_status', 'tb_status.id_status=tb_personil.id_status');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan=tb_personil.id_jabatan');
        $data = [
            "nik" => $this->input->post('nik', true),
            "nama_lengkap" => $this->input->post('nama', true),
            "id_bagian" => $this->input->post('bgn', true),
            "id_jabatan" => $this->input->post('jbtn', true),
            "jobclas" => $this->input->post('job', true),
            "id_status" => $this->input->post('sts', true)

        ];
        $this->db->insert('tb_personil', $data);
    }
    public function  getIdpersonil($id = null)

    {
        $this->db->select('*');
        //$this->db->from('tb_personil');
        $this->db->join('tb_bagian', 'tb_bagian.id_bagian=tb_personil.id_bagian');
        $this->db->join('tb_status', 'tb_status.id_status=tb_personil.id_status');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan=tb_personil.id_jabatan');
        return $this->db->get_where('tb_personil', ['id_personil' => $id])->row_array();
    }
    public function hapusdatapersonil($id)
    {
        // $this->db->select('*');
        // //$this->db->from('tb_personil');
        // $this->db->join('tb_bagian', 'tb_bagian.id_bagian=tb_personil.id_bagian');
        // $this->db->join('tb_status', 'tb_status.id_status=tb_personil.id_status');
        // $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan=tb_personil.id_jabatan');
        $this->db->delete('tb_personil', ['id_personil' => $id]);
    }

    public function tambah_user()
    {
        $datauser = [
            "nik" => $this->input->post('nik', true),
            "nama" => $this->input->post('nama', true),
            "jabatan" => $this->input->post('jabatan', true),
            "password" => sha1($this->input->post('password', true), false)

        ];
        $this->db->insert('user', $datauser);
    }
    public function ubahpersonil()
    {
        $this->db->select('*');
        //$this->db->from('tb_personil');
        $this->db->join('tb_bagian', 'tb_bagian.id_bagian=tb_personil.id_bagian');
        $this->db->join('tb_status', 'tb_status.id_status=tb_personil.id_status');
        $this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan=tb_personil.id_jabatan');
        $data = [
            "nik" => $this->input->post('nik', true),
            "nama_lengkap" => $this->input->post('nama', true),
            "id_bagian" => $this->input->post('bgn', true),
            "id_jabatan" => $this->input->post('jbtn', true),
            "jobclas" => $this->input->post('job', true),
            "id_status" => $this->input->post('sts', true)

        ];
        $this->db->where('nik', $this->input->post('nik'));
        $this->db->update('tb_personil', $data);
    }
    public function tambah_izin($id)
    {
        $data = [
            "id_personil" => $this->input->post('nik', true),
            "id_shif" => $this->input->post('shif', true),
            "tgl_izin" => $this->input->post('tgl_izin', true),
            "keperluan" => $this->input->post('kpr', true),
            "keterangan" => $this->input->post('ket', true),


        ];
        //if ($this->input->post('nik') == $id) {

        $this->db->insert('tb_izin', $data);
        //
    }
    public function tambah_telat($id)
    {
        $data = [
            "id_personil" => $this->input->post('nik', true),
            "id_shif" => $this->input->post('shif', true),
            "tgl_telat" => $this->input->post('tgl_telat', true),
            "lama_telat" => $this->input->post('lm_telat', true),
            "alasan" => $this->input->post('alasan', true),


        ];
        //if ($this->input->post('nik') == $id) {

        $this->db->insert('tb_telat', $data);
        //
    }
}
