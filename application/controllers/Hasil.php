<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class Hasil extends CI_Controller {

    public function index()
    {
        $data['title'] = 'Hasil';
        $data['hasil'] = $this->Alternatif_model->get_data('hasil')->result();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('hasil', $data);
        $this->load->view('templates/footer');
    }

    
    }





