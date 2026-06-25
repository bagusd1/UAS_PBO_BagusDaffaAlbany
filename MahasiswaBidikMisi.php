<?php
// Wajib memanggil class induk
require_once 'Mahasiswa.php';

class MahasiswaBidikMisi extends Mahasiswa {
    private $NomorKipKuliah;
    private $danaSakuSubsidi;

    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal, $NomorKipKuliah, $danaSakuSubsidi) {
        parent::__construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal);
        $this->NomorKipKuliah = $NomorKipKuliah;
        $this->danaSakuSubsidi = $danaSakuSubsidi;
    }

    // TAHAP 5: Method Overriding (Polimorfisme)
    // Total Tagihan = 0 (digratiskan penuh, ditanggung negara via KIP-K)
    public function hitungTagihanSemester() {
        return 0;
    }

    public function tampilkanSpesifikasiAkademik() {
        return "Jalur Bidikmisi - No KIP: {$this->NomorKipKuliah}, Dana Saku: Rp" . number_format($this->danaSakuSubsidi, 0, ',', '.');
    }

    // Method berisi query SELECT-WHERE
    public function getQueryMahasiswaBidikMisi() {
        return "SELECT id_mahasiswa, nama_mahasiswa, nim, nomor_kip_kuliah, dana_saku_subsidi 
                FROM tabel_mahasiswa 
                WHERE jenis_pembiayaan = 'bidikmisi'";
    }
}
?>