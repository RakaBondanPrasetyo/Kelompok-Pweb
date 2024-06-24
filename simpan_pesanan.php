<?php
// Pastikan semua data yang dibutuhkan diterima dari formulir
if (isset($_POST['nama']) && isset($_POST['email']) && isset($_POST['produk']) && isset($_POST['kapasitas']) && isset($_POST['alamat']) && isset($_POST['ewallet']) && isset($_POST['bank'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $produk = $_POST['produk'];
    $kapasitas = $_POST['kapasitas'];
    $alamat = $_POST['alamat'];
    $ewallet = $_POST['ewallet'];
    $bank = $_POST['bank'];

    // Format data menjadi string
    $data = "Nama: $nama\nEmail: $email\nProduk: $produk\nKapasitas: $kapasitas\nAlamat: $alamat\nE-Wallet: $ewallet\nBank: $bank\n\n";

    // Nama file tempat data akan disimpan
    $file = 'pesanan.txt';

    // Tulis data ke dalam file, tambahkan data baru di akhir file
    if (file_put_contents($file, $data, FILE_APPEND | LOCK_EX)) {
        echo "Pesanan berhasil disimpan!";
    } else {
        echo "Terjadi kesalahan saat menyimpan pesanan.";
    }
} else {
    echo "Data tidak lengkap. Silakan coba lagi.";
}
?>