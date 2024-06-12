<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kriteria extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kriteria_model');
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->Login_model->isLogin();
		$data['title'] = 'Kriteria';
		$data['kriteria'] = $this->kriteria_model->get_data('kriteria')->result();

		$this->load->view('dashboard/templates/header', $data);
		$this->load->view('dashboard/templates/sidebar');
		$this->load->view('dashboard/kriteria/kriteria', $data);
		$this->load->view('dashboard/templates/footer');
	}

	public function update_kriteria($No)
	{
		$this->Login_model->isLogin();
		$where = array('id_kriteria' => $No);
		$data['title'] = 'Update Kriteria';
		$data['kriteria'] = $this->Kriteria_model->get_where($where, 'kriteria')->result();

		$this->load->view('dashboard/templates/header', $data);
		$this->load->view('dashboard/templates/sidebar');
		$this->load->view('dashboard/kriteria/update/update', $data);
		$this->load->view('dashboard/templates/footer');
	}

	// public function __construct()
	// {
	// 	parent::__construct();
	// 	$this->load->model('kriteria_model');
	// }

	// public function index()
	// {

	// 	$data['title'] = 'Kriteria';
	// 	$data['kriteria'] = $this->kriteria_model->get_data('kriteria')->result();


	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// 	$this->load->view('kriteria', $data);
	// 	$this->load->view('templates/footer');
	// }

	// public function edit_kriteria($No)
	// {
	// 	$where = array('No' => $No);
	// 	$data['kriteria'] = $this->Kriteria_model->get_data($where, 'kriteria')->result();

	// 	$this->load->view('templates/header', $data);
	// 	$this->load->view('templates/sidebar', $data);
	// 	$this->load->view('edit', $data);
	// 	$this->load->view('templates/footer');
	// }
}
