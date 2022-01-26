<?php
class Data extends CI_Controller
{
    public function index()
    {
        $data['user'] =  $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'DESA GAYAMHARJO - ADMIN';
        $datas = array(
            'data'  => $this->M_data->get_all_data()->result(),
        );
        $this->load->view('sbadmin/header', $data);
        $this->load->view('sbadmin/sidebar');
        $this->load->view('sbadmin/topbar', $data);
        $this->load->view('data/show', $datas);
        $this->load->view('sbadmin/footer');
    }
    public function delete($id = NULL)
    {
        //hapus gambar
        $artikel = $this->M_artikel->get_data($id);
        $data = array('id'   => $id,);
        $this->M_data->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiHapus !!!');
        redirect('data');
    }
}
