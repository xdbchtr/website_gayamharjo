<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_artikel extends CI_Model
{
    //mengambil semua data dari database
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->order_by('id', 'desc');
        return $this->db->get();
    }
    public function add($data)
    {
        $this->db->insert('tbl_artikel', $data);
    }
    public function get_data($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_artikel');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_artikel', $data);
    }
}
