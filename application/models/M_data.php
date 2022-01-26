<?php
class M_data extends CI_Model
{
    public function get_all_data()
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->order_by('id', 'desc');
        $this->db->where('role_id', '2');
        return $this->db->get();
    }
    public function get_data($id)
    {
        $this->db->select('*');
        $this->db->from('tbl_user');
        $this->db->where('id', $id);
        return $this->db->get()->row();
    }
    public function delete($data)
    {
        $this->db->where('id', $data['id']);
        $this->db->delete('tbl_user', $data);
    }
}
