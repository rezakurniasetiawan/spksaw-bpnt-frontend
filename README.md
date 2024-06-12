# Sistem Pendukung Keputusan Penerima Bantuan Pangan Non Tunai dengan Metode Simple Additive Weighting (SAW)

Metode Simple Additive Weighting (SAW), juga dikenal sebagai metode penjumlahan terbobot, adalah pendekatan yang digunakan dalam pengambilan keputusan berdasarkan beberapa kriteria. Konsep dasar SAW adalah mencari penjumlahan terbobot dari rating kinerja pada setiap alternatif pada semua atribut (Fishburn 1967).

## Langkah-langkah Metode SAW

1. **Menentukan Kriteria:** Tentukan kriteria-kriteria yang akan digunakan dalam pengambilan keputusan, misalnya Ci.
2. **Rating Kecocokan:** Tentukan rating kecocokan setiap alternatif pada setiap kriteria (X).
3. **Membuat Matriks Keputusan:** Buat matriks keputusan berdasarkan kriteria (Ci), kemudian lakukan normalisasi matriks berdasarkan jenis atribut (atribut keuntungan atau biaya) sehingga diperoleh matriks ternormalisasi R.
4. **Perankingan:** Hasil akhir diperoleh dari proses perankingan dengan melakukan penjumlahan dari perkalian matriks ternormalisasi R dengan vektor bobot untuk memilih alternatif terbaik (Ai) sebagai solusi.

## Instalasi

Untuk menjalankan aplikasi ini, ikuti langkah-langkah berikut:
1. Clone repositori ini ke dalam direktori web server Anda.
   ```bash
   git clone https://github.com/rezakurniasetiawan/spksaw-bpnt-ci.git

2. Buat database baru di MySQL.

3. Impor skema database dari file `database.sql` ke dalam database yang baru dibuat.

4. Konfigurasi CodeIgniter:

Buka file `application/config/database.php`.

Sesuaikan pengaturan koneksi database dengan informasi database Anda.

5. Jalankan Aplikasi:

Buka aplikasi melalui web browser Anda.

Untuk akses web, gunakan URL: [http://localhost/spksaw-bpnt-frontend/](http://localhost/spksaw-bpnt-frontend/).

## Contoh Implementasi

![Screenshot 2024-06-12 163043](https://github.com/rezakurniasetiawan/spksaw-bpnt-frontend/assets/56224328/2f564a7b-2433-413e-9203-29435e8b813a)
![Screenshot 2024-06-12 163059](https://github.com/rezakurniasetiawan/spksaw-bpnt-frontend/assets/56224328/d179f5e7-4aa1-453d-8d4f-b12bbf0c6279)
![Screenshot 2024-06-12 163105](https://github.com/rezakurniasetiawan/spksaw-bpnt-frontend/assets/56224328/c872863b-3d9f-4cf2-8292-8274187e42c5)
![Screenshot 2024-06-12 163117](https://github.com/rezakurniasetiawan/spksaw-bpnt-frontend/assets/56224328/a30de50b-ebd3-4a54-9bdd-6de05e62fb30)


## Lisensi

Proyek ini dilisensikan di bawah [Nisa] Developemnt by [Reza Kurnia]. Lihat `LICENSE` untuk informasi lebih lanjut.
