<?php
// Wajib memanggil class induk
require_once 'Mahasiswa.php';

class MahasiswaMandiri extends Mahasiswa {
    private $golonganUkt;
    private $namaWali;

    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal, $golonganUkt, $namaWali) {
        // Memanggil constructor dari class induk (Mahasiswa)
        parent::__construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal);
        $this->golonganUkt = $golonganUkt;
        $this->namaWali = $namaWali;
    }

    // Wajib diimplementasi dari abstract class
    public function hitungTagihanSemester() {
        return $this->tarif_ukt_nominal; // Membayar penuh sesuai UKT
    }

    public function tampilkanSpesifikasiAkademik() {
        return "Jalur Mandiri - Golongan UKT: {$this->golonganUkt}, Wali: {$this->namaWali}";
    }

    // Method berisi query SELECT-WHERE
    public function getQueryMahasiswaMandiri() {
        return "SELECT id_mahasiswa, nama_mahasiswa, nim, golongan_ukt, nama_wali 
                FROM tabel_mahasiswa 
                WHERE jenis_pembiayaan = 'mandiri'";
    }
}
?>