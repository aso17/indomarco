<?php
class shif_model extends CI_model
{
    public function getallshif()
    {

        return $query = $this->db->get('tb_shif')->result_array();
    }
}
