<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Login_model extends CI_Model {
		
        public function cek_login($table, $where)
        {
            return $this->db->get_where($table, $where);
        }

        public function isLogin()
        {
            if ($this->session->userdata('status') != "login") {
                $this->session->set_flashdata('error', 'Anda harus login terlebih dahulu!');
                redirect('login');
            }
        }

        public function logged_name()
        {
            return $this->session->userdata('name');
        }
    
    }
