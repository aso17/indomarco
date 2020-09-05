<?php
class Area_model extends ci_model
{
    public function getAllarea()
    {
        $this->db->select('*');
        $this->db->from('tb_strukturarea');
        $this->db->join('tb_clastertoko', 'tb_clastertoko.id_toko=tb_strukturarea.id_toko');

        $query = $this->db->get()->result_array();
        return $query;
    }
    public function getidarea($id = null)
    {
        $this->db->select('*');
        //$this->db->from('tb_strukturarea');
        $this->db->join('tb_clastertoko', 'tb_clastertoko.id_toko=tb_strukturarea.id_toko');
        return $this->db->get_where('tb_strukturarea', ['id_area' => $id])->row_array();
    }
}
