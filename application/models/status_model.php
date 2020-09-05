<?php
class Status_model extends CI_model
{
    public function getAllstatus()
    {
        return $query = $this->db->get('tb_status')->result_array();
    }
}
