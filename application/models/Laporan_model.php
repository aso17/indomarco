<?php
class Laporan_model extends CI_Model
{
    public function getAll($tgl_1, $tgl_2)
    {
        $this->db->select('*');
        $this->db->from('tb_nofisik');
        $this->db->join('tb_clastertoko', 'tb_clastertoko.id_toko=tb_nofisik.id_toko');
        $this->db->join('tb_strukturarea', 'tb_strukturarea.id_area=tb_nofisik.id_toko');
        $this->db->where('tgl_input >=', $tgl_1);
        $this->db->where('tgl_input <=', $tgl_2);
        $query = $this->db->get();
        return $query->result();
    }
}
