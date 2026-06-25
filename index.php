<?php
// 1. Memanggil file koneksi database
require_once 'koneksi.php';

// 2. Memanggil class-class Subclass yang sejajar di folder yang sama
require_once 'MahasiswaMandiri.php';
require_once 'MahasiswaBidikMisi.php';
require_once 'MahasiswaPrestasi.php';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Registrasi UKT Mahasiswa</title>
    <style>
        body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; margin: 30px; background-color: #f8f9fa; }
        h1 { text-align: center; color: #2c3e50; margin-bottom: 40px; }
        h2 { color: #fff; padding: 10px 15px; border-radius: 5px; margin-top: 30px; font-size: 18px; }
        .bg-mandiri { background-color: #3498db; }
        .bg-bidikmisi { background-color: #27ae60; }
        .bg-prestasi { background-color: #f39c12; }
        table { width: 100%; border-collapse: collapse; background-color: #fff; box-shadow: 0 2px 5px rgba(0,0,0,0.1); }
        th, td { border: 1px solid #ddd; padding: 12px; text-align: left; }
        th { background-color: #ecf0f1; color: #333; }
        tr:hover { background-color: #f5f5f5; }
        .tagihan { font-weight: bold; color: #e74c3c; }
        .gratis { font-weight: bold; color: #27ae60; }
    </style>
</head>
<body>

    <h1>Daftar Registrasi Pembayaran Kuliah</h1>

    <h2 class="bg-mandiri">Kategori: Mahasiswa Mandiri</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Semester</th>
                <th>Spesifikasi Akademik</th>
                <th>Total Tagihan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Mengambil data mandiri melalui koneksi PDO
            $stmt = $pdo->query("SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'mandiri'");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $mhs = new MahasiswaMandiri(
                    $row['id_mahasiswa'], $row['nama_mahasiswa'], $row['nim'], 
                    $row['semester'], $row['tarif_ukt_nominal'], 
                    $row['golongan_ukt'], $row['nama_wali']
                );
                
                echo "<tr>";
                echo "<td>" . $mhs->getNim() . "</td>";
                echo "<td>" . $mhs->getNamaMahasiswa() . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $mhs->tampilkanSpesifikasiAkademik() . "</td>";
                echo "<td class='tagihan'>" . number_format($mhs->hitungTagihanSemester(), 0, ',', '.') . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h2 class="bg-bidikmisi">Kategori: Mahasiswa Bidikmisi</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Semester</th>
                <th>Spesifikasi Akademik</th>
                <th>Total Tagihan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'bidikmisi'");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $mhs = new MahasiswaBidikMisi(
                    $row['id_mahasiswa'], $row['nama_mahasiswa'], $row['nim'], 
                    $row['semester'], $row['tarif_ukt_nominal'], 
                    $row['nomor_kip_kuliah'], $row['dana_saku_subsidi']
                );
                
                echo "<tr>";
                echo "<td>" . $mhs->getNim() . "</td>";
                echo "<td>" . $mhs->getNamaMahasiswa() . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $mhs->tampilkanSpesifikasiAkademik() . "</td>";
                echo "<td class='gratis'>Rp 0 (Gratis)</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <h2 class="bg-prestasi">Kategori: Mahasiswa Prestasi</h2>
    <table>
        <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Semester</th>
                <th>Spesifikasi Akademik</th>
                <th>Total Tagihan (Rp)</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $stmt = $pdo->query("SELECT * FROM tabel_mahasiswa WHERE jenis_pembiayaan = 'prestasi'");
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $mhs = new MahasiswaPrestasi(
                    $row['id_mahasiswa'], $row['nama_mahasiswa'], $row['nim'], 
                    $row['semester'], $row['tarif_ukt_nominal'], 
                    $row['nama_instansi_beasiswa'], $row['minimal_ipk_syarat']
                );
                
                echo "<tr>";
                echo "<td>" . $mhs->getNim() . "</td>";
                echo "<td>" . $mhs->getNamaMahasiswa() . "</td>";
                echo "<td>" . $row['semester'] . "</td>";
                echo "<td>" . $mhs->tampilkanSpesifikasiAkademik() . "</td>";
                echo "<td class='tagihan'>" . number_format($mhs->hitungTagihanSemester(), 0, ',', '.') . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

</body>
</html>