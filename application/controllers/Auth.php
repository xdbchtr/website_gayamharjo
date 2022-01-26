<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {

            $data['title'] = 'DESA GAYAMHARJO - LOGIN';
            $this->load->view('sbadmin/header', $data);
            $this->load->view('admin/v_login');
            $this->load->view('sbadmin/footer');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tbl_user', ['email' => $email])->row_array();
        if ($user) {
            //jika user aktif
            if ($user['is_active'] == 1) {
                //cek password
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    if ($user['role_id'] == 1) {
                        redirect('admin');
                    } else
                        redirect('user');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Wrong Password
          </div>');
                    redirect('Auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            This Email has not been Activated
          </div>');
                redirect('Auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email is not Registered
          </div>');
            redirect('Auth');
        }
    }

    public function regist()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
            'is_unique' => 'This Email is Already Registered'
        ]);

        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', [
            'matches' => 'password doesnt match!',
            'min_length' => 'Password is too Short'
        ]);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');


        if ($this->form_validation->run() == false) {
            $data['title'] = 'DESA GAYAMHARJO - REGISTRATION';
            $this->load->view('sbadmin/header', $data);
            $this->load->view('admin/v_regist');
            $this->load->view('sbadmin/footer');
        } else {
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($this->input->post('email', true)),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => 2,
                'is_active' => 1,
                'date_created' => time()
            ];

            $this->db->insert('tbl_user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat! Akun sudah Berhasil dibuat, Silahkan Login
          </div>');
            redirect('Auth/index');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Berhasil Logout!
          </div>');
        redirect('Auth');
    }
    public function blocked()
    {
        $this->load->view('auth/blocked');
    }
}
