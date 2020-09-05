<?php
class Bagian_model extends CI_model
{
    public function getAll_bagian()
    {
        return $query = $this->db->get('tb_bagian')->result_array();
    }
}
