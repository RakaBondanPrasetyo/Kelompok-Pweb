<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $noTelphone = $_POST['noTelphone'];
    $produk = $_POST['produk'];
    $kapasitas = $_POST['kapasitas'];
    $alamat = $_POST['alamat'];
    $ewallet = $_POST['ewallet'];
    $bank = $_POST['bank'];

    echo "<h1>Data Diterima</h1>";
    echo "<p>Nama: $nama</p>";
    echo "<p>Email: $email</p>";
    echo "<p>No Telphone: $noTelphone</p>";
    echo "<p>Produk: $produk</p>";
    echo "<p>Kapasitas: $kapasitas</p>";
    echo "<p>Alamat: $alamat</p>";
    echo "<p>E-Wallet: $ewallet</p>";
    echo "<p>Bank: $bank</p>";

    // Format the data as a string
    $data = "Nama: $nama\nEmail: $email\nNo Telphone: $noTelphone\nProduk: $produk\nKapasitas: $kapasitas\nAlamat: $alamat\nE-Wallet: $ewallet\nBank: $bank\n\n";

    // Save the data to a text file
    $file = 'data.txt';
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "<p>Data Anda telah disimpan.</p>";
} else {
    echo "<p>Form not submitted correctly.</p>";
}
?>
