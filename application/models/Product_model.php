<?php
class product_model extends ci_model
{
    public function getallproduct()
    {
        return $this->db->get('tb_product')->result_array();
    }
}
