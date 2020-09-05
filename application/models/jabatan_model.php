<?php
class Jabatan_model extends CI_model
{
    public function getAlljabatan()
    {
        return $query = $this->db->get('tb_jabatan')->result_array();
    }
}
