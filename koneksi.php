<?php
// Konfigurasi Database
$host = 'localhost';
$dbname = 'db_uas_pbo_ti1d_bagusdaffaalbany'; 
$username = 'root';         
$password = '';            

try {
    // Membuat koneksi menggunakan PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    
    // Set mode error PDO ke Exception agar mudah mendeteksi masalah
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Koneksi Database Gagal: " . $e->getMessage());
}
?>