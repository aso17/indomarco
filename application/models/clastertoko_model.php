<?php
class Clastertoko_model extends CI_model
{
    public function getAlltoko()
    {
        return $query = $this->db->get('tb_clastertoko')->result_array();
    }
    public function getidtoko($id = null)
    {
        return $this->db->get_where('tb_clastertoko', ['id_toko' => $id])->row_array();
    }
    public function tambahtoko()
    {
        $data = [
            "kd_toko" => $this->input->post('kd_toko', true),
            "nama_toko" => $this->input->post('nm_toko', true),
            "zona" => $this->input->post('zona', true),
            "kecamatan" => $this->input->post('kcm', true),
            "kota" => $this->input->post('kota', true),


        ];
        $this->db->insert('tb_clastertoko', $data);
    }
    public function ubahtoko()
    {
        $data = [
            "kd_toko" => $this->input->post('kd_toko', true),
            "nama_toko" => $this->input->post('nm_toko', true),
            "zona" => $this->input->post('zona', true),
            "kecamatan" => $this->input->post('kcm', true),
            "kota" => $this->input->post('kota', true),

        ];
        $this->db->where('kd_toko', $this->input->post('kd_toko'));
        $this->db->update('tb_clastertoko', $data);
    }

    public function hapustoko($id)
    {
        $this->db->delete('tb_clastertoko', ['id_toko' => $id]);
    }
}
