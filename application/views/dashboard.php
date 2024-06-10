<?php $this->load->view('templates/header'); ?>

<div class=" justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-fw fa-users"></i> Dashboard</h1>
<br><br>
<th><b>Sistem Pendukung Keputusan Penerima Bantuan Pangan Non Tunai dengan metode SAW (Simple Additive Weighting)</b></th>

<br>
<div><br>Metode Simple Additive Weighting (SAW) sering juga dikenal istilah metode penjumlahan terbobot. Konsep dasar metode SAW adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut (Fishburn 1967). SAW dapat dianggap sebagai cara yang paling mudah dan intuitif untuk menangani masalah Multiple Criteria Decision-Making MCDM, karena fungsi linear additive dapat mewakili preferensi pembuat keputusan (Decision-Making, DM). Hal tersebut dapat dibenarkan, namun, hanya ketika asumsi preference independence (Keeney & Raiffa 1976) atau preference separability (Gorman 1968) terpenuhi.</div>

<div>Langkah Penyelesaian Simple Additive Weighting (SAW) adalah sebagai berikut :</div>

<div>1. Menentukan kriteria-kriteria yang akan dijadikan acuan dalam pengambilan keputusan, yaitu Ci</div>
<div>2. Menentukan rating kecocokan setiap alternatif pada setiap kriteria (X).</div>
<div>3. Membuat matriks keputusan berdasarkan kriteria(Ci), kemudian melakukan normalisasi matriks berdasarkan persamaan yang disesuaikan dengan jenis atribut (atribut keuntungan ataupun atribut biaya) sehingga diperoleh matriks ternormalisasi R.</div>
<div>4. Hasil akhir diperoleh dari proses perankingan yaitu penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot sehingga diperoleh nilai terbesar yang dipilih sebagai alternatif terbaik (Ai)sebagai solusi<