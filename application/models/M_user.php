<?php
class M_user extends CI_Model
{
    public function cek_logins($nip, $password)
    {
        // fetch by username first
        $this->db->where('nip', $nip);
        $query = $this->db->get('tbl_user');
        $result = $query->row_array(); // get the row first

        if (!empty($result) && password_verify($password, $result['password'])) {
            // if this username exists, and the input password is verified using password_verify
            return $result;
        } else {
            return false;
        }
    }
}
