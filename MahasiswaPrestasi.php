<?php
// Wajib memanggil class induk
require_once 'Mahasiswa.php';

class MahasiswaPrestasi extends Mahasiswa {
    private $namaInstansiBeasiswa;
    private $minimalIpkSyarat;

    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal, $namaInstansiBeasiswa, $minimalIpkSyarat) {
        parent::__construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal);
        $this->namaInstansiBeasiswa = $namaInstansiBeasiswa;
        $this->minimalIpkSyarat = $minimalIpkSyarat;
    }

    public function hitungTagihanSemester() {
        // Contoh logika: UKT dipotong setengah oleh beasiswa
        return $this->tarif_ukt_nominal / 2; 
    }

    public function tampilkanSpesifikasiAkademik() {
        return "Jalur Prestasi - Instansi: {$this->namaInstansiBeasiswa}, Syarat IPK: {$this->minimalIpkSyarat}";
    }

    // Method berisi query SELECT-WHERE
    public function getQueryMahasiswaPrestasi() {
        return "SELECT id_mahasiswa, nama_mahasiswa, nim, nama_instansi_beasiswa, minimal_ipk_syarat 
                FROM tabel_mahasiswa 
                WHERE jenis_pembiayaan = 'prestasi'";
    }
}
?>