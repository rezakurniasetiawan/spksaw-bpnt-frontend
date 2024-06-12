<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Login_model');
	}
	public function index()
	{
		// handle aurthorization
		$this->Login_model->isLogin();

		$data['title'] = 'Dashboard';
		$this->load->view('dashboard/templates/header', $data);
		$this->load->view('dashboard/templates/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('dashboard/templates/footer');
	}
}
