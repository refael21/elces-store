<!DOCTYPE html>
<html>
<head>
    <title>Detail Produk - ELCES Store</title>
    <link rel="stylesheet" href="/public/css/style.css">
</head>
<body>
    <h1><?= $product['name'] ?></h1>
    <p>Harga: Rp <?= number_format($product['price'], 0, ',', '.') ?></p>
    <p>Deskripsi: <?= $product['description'] ?></p>
    <a href="index.php">Kembali ke daftar produk</a>
</body>
</html>
