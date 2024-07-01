<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metode Pembayaran</title>
    <link rel="stylesheet" href="../CSS/pembelian.css">
</head>
<body>
    <section id="PaymentOptions" class="PaymentOptions">
        <div class="container">
            <h2>Metode Pembayaran</h2>
            <p>Silahkan pilih metode pembayaran Anda:</p>
            <form action="simpan_pesanan.php" method="post">
                <div class="mb-3">
                <label for="nama">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" required>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="noTelphone">No Telphone</label>
                    <input type="noTelphone" class="form-control" id="noTelphone" name="noTelphone" required>
                </div>
                <div class="mb-3">
                    <label for="produk">Produk</label>
                    <select class="form-control" id="produk" name="produk" required>
                        <option value="-">Pilih produk anda...</option>
                        <option value="iphone11">Iphone 11 Series</option>
                        <option value="iphone12">Iphone 12 Series</option>
                        <option value="iphone13">Iphone 13 Series</option>
                        <option value="iphone14">Iphone 14 Series</option>
                        <option value="iphone11">Iphone 15 Series</option>
                        <option value="galaxys24">Galaxy S24 Ultra</option>
                        <option value="galaxys23">Galaxy S23 Ultra</option>
                        <option value="pocof4">Poco f4 Pro</option>
                        <option value="galaxyflip">Galaxy Flip3</option>
                        <option value="asusrog7">Asus ROG 7</option>
                        <option value="opporeno10">Oppo Reno 10</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kapasitas">Kapasitas</label>
                    <select class="form-control" id="kapasitas" name="kapasitas" required>
                        <option value="-">Pilih kapasitas...</option>
                        <option value="64gb">64gb</option>
                        <option value="128gb">128gb</option>
                        <option value="256gb">256gb</option>
                        <option value="512gb">512gb</option>
                        <option value="1tb">1tb</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="alamat">Alamat</label>
                    <textarea class="form-control" id="alamat" name="alamat" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="ewalletSelection">PILIH E-WALLET</label>
                    <select class="form-control" id="ewalletSelection" name="ewallet" required>
                        <option value="-">--</option>
                        <option value="DANA">DANA</option>
                        <option value="GOPAY">GOPAY</option>
                        <option value="SHOPPEPAY">SHOPPEPAY</option>
                        <option value="OVO">OVO</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="bankSelection">PILIH BANK</label>
                    <select class="form-control" id="bankSelection" name="bank" required>
                        <option value="-">--</option>
                        <option value="BANK BRI">BANK BRI</option>
                        <option value="BANK MANDIRI">BANK MANDIRI</option>
                        <option value="BANK BCA">BANK BCA</option>
                        <option value="BANK BNI">BANK BNI</option>
                    </select>
                </div>
                <div class="mb-4">
                    <button type="submit" class="btn btn-primary" name="beli">Bayar Sekarang</button>
                </div>
            </form>
        </div>
    </section>
</body>
</html>
