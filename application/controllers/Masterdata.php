
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterdata extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masterdata_model');
        $this->load->model('Login_model');
        $this->load->model('kriteria_model');
    }

    public function index()
    {
        $this->Login_model->isLogin();
        $data['title'] = 'Master Data';
        $data['dependent'] = $this->Masterdata_model->get_dependent()->result();
        $data['electricity'] = $this->Masterdata_model->get_electricity()->result();
        $data['house'] = $this->Masterdata_model->get_house()->result();
        $data['income'] = $this->Masterdata_model->get_income()->result();
        $data['work'] = $this->Masterdata_model->get_work()->result();
        $data['kriteria'] = $this->kriteria_model->get_data('kriteria')->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar');
        $this->load->view('dashboard/masterdata/masterdata', $data);
        $this->load->view('dashboard/templates/footer');
    }
}
