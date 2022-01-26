<?php
class Admin extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }


  public function index()
  {
    $data['user'] =  $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();

    $data['title'] = 'DESA GAYAMHARJO - ADMIN';
    $this->load->view('sbadmin/header', $data);
    $this->load->view('sbadmin/sidebar');
    $this->load->view('sbadmin/topbar', $data);
    $this->load->view('admin/index');
    $this->load->view('sbadmin/footer');
  }
}
