<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hasil extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
    }
    public function index()
    {
        // Check if user is logged in
        $this->Login_model->isLogin();
        // Load model alternatif dan kriteria
        $alternatif = $this->Alternatif_model->get_data('alternatif')->result();
        $kriteria = $this->Kriteria_model->get_data('kriteria')->result();
        // Inisialisasi data
        $data['title'] = 'Hasil';
        $data['alternatif'] = $this->Alternatif_model->get_data('alternatif')->result();
        $bobot = []; // Inisialisasi array bobot
        foreach ($kriteria as $krit) { // Looping kriteria
            $bobot[$krit->id_kriteria] = floatval(str_replace(',', '.', $krit->bobot)); // Set bobot dengan mengonversi ke float
        }

        // Inisialisasi nilai alternatif dari tabel hasil
        $nilai = []; // Inisialisasi nilai alternatif
        foreach ($alternatif as $alt) { // Looping alternatif
            $nilai[$alt->no] = []; // Inisialisasi nilai alternatif
            foreach ($kriteria as $krit) { // Looping kriteria
                $value = $alt->{'value_c' . $krit->id_kriteria};
                if (is_numeric($value)) {
                    $nilai[$alt->no][$krit->id_kriteria] = $value; // Set nilai alternatif
                } else {
                    $nilai[$alt->no][$krit->id_kriteria] = 0; // Atau handle sesuai kebutuhan
                }
            }
        }
        // Normalisasi matriks keputusan
        $normalisasi = []; // Inisialisasi matriks normalisasi
        foreach ($alternatif as $alt) { // Looping alternatif
            $normalisasi[$alt->no] = []; // Inisialisasi matriks normalisasi
            $normalisasi[$alt->no]['no'] = $alt->no; // Tambahkan nomor alternatif
            foreach ($kriteria as $krit) { // Looping kriteria
                $max_value = max(array_column($nilai, $krit->id_kriteria));
                if ($max_value > 0) {
                    $normalisasi[$alt->no][$krit->id_kriteria] = $nilai[$alt->no][$krit->id_kriteria] / $max_value; // Hitung normalisasi
                } else {
                    $normalisasi[$alt->no][$krit->id_kriteria] = 0; // Handle divisi nol
                }
            }
        }
        // Hitung Nilai Akhir Preferensi
        $preferensi = []; // Inisialisasi array preferensi akhir
        foreach ($alternatif as $alt) { // Looping alternatif
            $preferensi[$alt->no] = []; // Inisialisasi array preferensi
            $preferensi[$alt->no][0] = 0; // Inisialisasi nilai preferensi
            foreach ($kriteria as $krit) { // Looping kriteria
                $preferensi[$alt->no][$krit->id_kriteria] = $normalisasi[$alt->no][$krit->id_kriteria] * $bobot[$krit->id_kriteria]; // Hitung preferensi
                $preferensi[$alt->no][0] += $preferensi[$alt->no][$krit->id_kriteria]; // Hitung nilai preferensi
            }
        }

        // Membuat array untuk menyimpan total preferensi dan no alternatif
        $ranking = [];
        foreach ($preferensi as $no => $pref) {
            $ranking[] = [
                'no' => $no,  // Menyimpan nomor alternatif asli
                'data' => $pref
            ];
        }

        // Urutkan berdasarkan total preferensi secara descending
        usort($ranking, function ($a, $b) {
            return $b['data'][0] <=> $a['data'][0];
        });

        $data['normalisasi'] = $normalisasi;
        $data['ranking'] = $ranking;

        $this->load->view('dashboard/templates/header', $data);
        $this->load->view('dashboard/templates/sidebar');
        $this->load->view('dashboard/hasil/hasil', $data);
        $this->load->view('dashboard/templates/footer');
    }
}
