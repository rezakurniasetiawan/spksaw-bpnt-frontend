<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Masterdata_model');
        $this->load->model('Login_model');
        $this->load->model('Alternatif_model');
    }

    public function index()
    {
        $this->Login_model->isLogin();
        $data['title'] = 'Alternatif';
        $data['alternatif'] = $this->Alternatif_model->get_data('alternatif')->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar');
        $this->load->view('dashboard/alternatif/alternatif');
        $this->load->view('dashboard/templates/footer');
    }

    public function add_alternatif()
    {
        $this->Login_model->isLogin();
        $data['title'] = 'Tambah Alternatif';
        $data['dependent'] = $this->Masterdata_model->get_dependent()->result();
        $data['electricity'] = $this->Masterdata_model->get_electricity()->result();
        $data['house'] = $this->Masterdata_model->get_house()->result();
        $data['income'] = $this->Masterdata_model->get_income()->result();
        $data['work'] = $this->Masterdata_model->get_work()->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar');
        $this->load->view('dashboard/alternatif/add/add', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function create()
    {
        $nama = $this->input->post('nama');
        $valueC1 = $this->input->post('C1');
        $valueC2 = $this->input->post('C2');
        $valueC3 = $this->input->post('C3');
        $valueC4 = $this->input->post('C4');
        $valueC5 = $this->input->post('C5');

        $value_dependent = array('value_dependent' => $valueC1);
        $C1 = $this->Masterdata_model->get_where_dependent($value_dependent)->result();
        $nameC1 = $C1[0]->name_dependent;

        $value_house = array('value_house' => $valueC2);
        $C2 = $this->Masterdata_model->get_where_house($value_house)->result();
        $nameC2 = $C2[0]->name_house;

        $value_electricity = array('value_electricity' => $valueC3);
        $C3 = $this->Masterdata_model->get_where_electricity($value_electricity)->result();
        $nameC3 = $C3[0]->name_electricity;

        $value_income = array('value_income' => $valueC4);
        $C4 = $this->Masterdata_model->get_where_income($value_income)->result();
        $nameC4 = $C4[0]->name_income;

        $value_work = array('value_work' => $valueC5);
        $C5 = $this->Masterdata_model->get_where_work($value_work)->result();
        $nameC5 = $C5[0]->name_work;

        $no = $this->Alternatif_model->get_no('alternatif')->result();
        // ambilkan no terkahir
        $no = $no[0]->no;

        $data = array(
            'no' => $no + 1,
            'nama' => $nama,
            'name_c1' => $nameC1,
            'name_c2' => $nameC2,
            'name_c3' => $nameC3,
            'name_c4' => $nameC4,
            'name_c5' => $nameC5,
            'value_c1' => $valueC1,
            'value_c2' => $valueC2,
            'value_c3' => $valueC3,
            'value_c4' => $valueC4,
            'value_c5' => $valueC5,
        );

        $this->Alternatif_model->tambah_aksi($data, 'alternatif');
        $this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
        redirect('alternatif');
    }

    public function delete($no)
    {
        $where = array('No' => $no);
        $this->Alternatif_model->hapus_data($where, 'alternatif');
        $this->session->set_flashdata('success', 'Data Berhasil Dihapus');
        redirect('alternatif/index');
    }

    public function update_alternatif($no)
    {
        $this->Login_model->isLogin();
        $where = array('No' => $no);
        $data['title'] = 'Edit Alternatif';
        $data['alternatif'] = $this->Alternatif_model->edit_data($where, 'alternatif')->result();

        $data['dependent'] = $this->Masterdata_model->get_dependent()->result();
        $data['electricity'] = $this->Masterdata_model->get_electricity()->result();
        $data['house'] = $this->Masterdata_model->get_house()->result();
        $data['income'] = $this->Masterdata_model->get_income()->result();
        $data['work'] = $this->Masterdata_model->get_work()->result();

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar');
        $this->load->view('dashboard/alternatif/update/update', $data);
        $this->load->view('dashboard/templates/footer');
    }

    public function update()
    {
        $no = $this->input->post('no');
        $nama = $this->input->post('nama');
        $valueC1 = $this->input->post('C1');
        $valueC2 = $this->input->post('C2');
        $valueC3 = $this->input->post('C3');
        $valueC4 = $this->input->post('C4');
        $valueC5 = $this->input->post('C5');

        $value_dependent = array('value_dependent' => $valueC1);
        $C1 = $this->Masterdata_model->get_where_dependent($value_dependent)->result();
        $nameC1 = $C1[0]->name_dependent;

        $value_house = array('value_house' => $valueC2);
        $C2 = $this->Masterdata_model->get_where_house($value_house)->result();
        $nameC2 = $C2[0]->name_house;

        $value_electricity = array('value_electricity' => $valueC3);
        $C3 = $this->Masterdata_model->get_where_electricity($value_electricity)->result();
        $nameC3 = $C3[0]->name_electricity;

        $value_income = array('value_income' => $valueC4);
        $C4 = $this->Masterdata_model->get_where_income($value_income)->result();
        $nameC4 = $C4[0]->name_income;

        $value_work = array('value_work' => $valueC5);
        $C5 = $this->Masterdata_model->get_where_work($value_work)->result();
        $nameC5 = $C5[0]->name_work;

        $data = array(
            'nama' => $nama,
            'name_c1' => $nameC1,
            'name_c2' => $nameC2,
            'name_c3' => $nameC3,
            'name_c4' => $nameC4,
            'name_c5' => $nameC5,
            'value_c1' => $valueC1,
            'value_c2' => $valueC2,
            'value_c3' => $valueC3,
            'value_c4' => $valueC4,
            'value_c5' => $valueC5,
        );

        $where = array(
            'no' => $no
        );
        $this->Alternatif_model->update_data($where, $data, 'alternatif');
        $this->session->set_flashdata('success', 'Data Berhasil Diubah');
        redirect('alternatif');
    }
}
