<?php

// Mendefinisikan Abstract Class Mahasiswa
abstract class Mahasiswa {
    // Properti Terenkapsulasi (Protected) - Pas dengan kolom tabel database
    protected $id_mahasiswa;
    protected $nama_mahasiswa;
    protected $nim;
    protected $semester;
    protected $tarif_ukt_nominal;

    // Constructor untuk memetakan data langsung dari baris tabel database
    public function __construct($id_mahasiswa, $nama_mahasiswa, $nim, $semester, $tarif_ukt_nominal) {
        $this->id_mahasiswa = $id_mahasiswa;
        $this->nama_mahasiswa = $nama_mahasiswa;
        $this->nim = $nim;
        $this->semester = $semester;
        $this->tarif_ukt_nominal = $tarif_ukt_nominal;
    }

    // =========================================================================
    // ABSTRACT METHODS (Wajib di-override/diimplementasikan oleh class anak)
    // =========================================================================
    
    /**
     * Menghitung total tagihan semester ini (misal: UKT dikurangi subsidi beasiswa, dll)
     */
    abstract public function hitungTagihanSemester();

    /**
     * Menampilkan spesifikasi atau detail akademik khusus berdasarkan jenis pembiayaan
     */
    abstract public function tampilkanSpesifikasiAkademik();

    // =========================================================================
    // GETTER & SETTER (Opsional, untuk mengakses properti protected dari luar)
    // =========================================================================
    public function getNamaMahasiswa() {
        return $this->nama_mahasiswa;
    }

    public function getNim() {
        return $this->nim;
    }
} 