<?php
class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function show()
    {
        $data['user'] =  $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'DESA GAYAMHARJO - ARTIKEL';
        $data['artikel'] = $this->db->get('tbl_artikel')->result_array();
        $this->load->view('sbadmin/header', $data);
        $this->load->view('sbadmin/sidebar');
        $this->load->view('sbadmin/topbar', $data);
        $this->load->view('artikel/show', $data);
        $this->load->view('sbadmin/footer');
    }
    public function add()
    {
        $data['user'] =  $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'DESA GAYAMHARJO - ARTIKEL';
        $data['artikel'] = $this->db->get('tbl_artikel')->result_array();
        $this->load->view('sbadmin/header', $data);
        $this->load->view('sbadmin/sidebar');
        $this->load->view('sbadmin/topbar', $data);
        $this->load->view('artikel/add', $data);
        $this->load->view('sbadmin/footer');
    }
    public function tambah()
    {
        $config['upload_path'] = './assets/images/';
        $config['allowed_types'] = 'gif|jpg|png|jpeg|ico';
        $config['max_size']     = '10240kb';
        $this->upload->initialize($config);
        $field_name =  "namagambar";
        if (!$this->upload->do_upload($field_name)) {
            $data = array(
                'title' => 'Tambah Artikel',
                'artikel'  => $this->M_artikel->get_all_data(),
                'error_upload' => $this->upload->display_errors()
            );
            $this->load->view('sbadmin/header', $data);
            $this->load->view('sbadmin/sidebar');
            $this->load->view('sbadmin/topbar', $data);
            $this->load->view('artikel/show', $data);
            $this->load->view('sbadmin/footer');
        } else {
            $upload_data       = array('uploads' => $this->upload->data());
            $config['image_library'] = 'gd2';
            $config['source_image'] =  './assets/images/' . $upload_data['uploads']['file_name'];
            $this->load->library('image_lib', $config);

            $data = array(
                'head'   => $this->input->post('head'),
                'subhead'   => $this->input->post('subhead'),
                'isi'   => $this->input->post('isi'),
                'namagambar'      => $upload_data['uploads']['file_name'],
            );
            $this->M_artikel->add($data);
            redirect('artikel');
        }
        $data = array(
            'title' => 'Tambah Produk',
        );
        $data['user'] =  $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
        $data['title'] = 'DESA GAYAMHARJO - ARTIKEL';
        $data['artikel'] = $this->db->get('tbl_artikel')->result_array();
        $this->load->view('sbadmin/header', $data);
        $this->load->view('sbadmin/sidebar');
        $this->load->view('sbadmin/topbar', $data);
        $this->load->view('artikel/add', $data);
        $this->load->view('sbadmin/footer');
    }
    public function delete($id = NULL)
    {
        //hapus gambar
        $artikel = $this->M_artikel->get_data($id);
        if ($artikel->namagambar != "") {
            unlink('./assets/images/' . $artikel->namagambar);
        }

        //end hapus gambar

        $data = array('id'   => $id,);
        $this->M_artikel->delete($data);
        $this->session->set_flashdata('pesan', 'Data Berhasil DiHapus !!!');
        redirect('artikel/show');
    }
}
