<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        // if($this->Login_model->logged_id())
        // {
        // 	redirect('Login/home');
        // }else{
        // }
        $this->load->view('auth/login');
    }

    public function LoginController()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $where = array(
            'email' => $email,
            'password' => md5($password)
        );
        $cek = $this->Login_model->cek_login("user", $where)->num_rows();
        if ($cek > 0) {
            $data_session = array(
                'nama' => $email,
                'status' => "login"
            );

            // get data where email
            $data = $this->db->get_where('user', ['email' => $email])->row_array();
            // masukkan ke session
            $this->session->set_userdata('email', $data['email']);
            $this->session->set_userdata('name', $data['name']);
            $this->session->set_userdata('id', $data['id']);

            $this->session->set_userdata($data_session);

            $this->session->set_flashdata('success', 'Login Berhasil');
            redirect('dashboard');
        } else {
            $this->session->set_flashdata('error', 'Username dan password salah!');
            redirect('login');
        }
    }

    // buatkan md5 "password"

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }



    public function home()
    {
        $data['page'] = "Dashboard";
        $this->load->view('admin/index', $data);
    }
}

/* End of file Login.php */
