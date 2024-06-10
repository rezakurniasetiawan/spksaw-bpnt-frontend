<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Alternatif extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Alternatif';
        $data['alternatif'] = $this->Alternatif_model->get_data('alternatif')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('alternatif', $data);
        $this->load->view('templates/footer');
    }

   
    public function tambah_aksi()
    {
        $nama = $this->input->post('nama');
        $C1 = $this->input->post('C1');
        $C2 = $this->input->post('C2');
        $C3 = $this->input->post('C3');
        $C4 = $this->input->post('C4');
        $C5 = $this->input->post('C5');

        $data = array(
            'nama' => $nama,
            'C1' => $C1,
            'C2' => $C2,
            'C3' => $C3,
            'C4' => $C4,
            'C5' => $C5,
        );

        $this->Alternatif_model->tambah_aksi($data, 'alternatif');
        redirect('alternatif');
    }

    public function hapus($no)
    {
        $where = array('No' => $no);
        $this->Alternatif_model->delete_data($where, 'alternatif');
        redirect('alternatif/index');
    }

    public function edit($no)
    {
        $where = array('No' => $no);
        $data['alternatif'] = $this->Alternatif_model->edit_data($where, 'alternatif')->result();

        $data['title'] = 'Edit Alternatif';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('edit', $data);
        $this->load->view('templates/footer');
    }


}




