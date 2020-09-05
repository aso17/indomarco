<?php
class Dokumen_model extends CI_Model
{
    public function tambah()
    {
        $data = [
            "id_toko" => $this->input->post('kd_toko', true),
            "id_area" => $this->input->post('nm_as', true),
            "tgl_input" => $this->input->post('tgl_input', true),
            "no_ttd" => $this->input->post('no_doc', true),
            "no_nrb" => $this->input->post('no_nrb', true),
            "keterangan" => $this->input->post('ket', true),
            "nama_driver" => $this->input->post('nm_driver', true)
        ];
        $this->db->insert('tb_nofisik', $data);
    }
}
