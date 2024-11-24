<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <link rel="stylesheet" href="public/css/style.css">
</head>
<body>
    <h1>Daftar Produk</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <img src="public/images/<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 100px; height: auto;">
                <a href="index.php?action=view&id=<?= $product['id'] ?>">
                    <?= htmlspecialchars($product['name']) ?>
                </a>
                - Rp <?= number_format($product['price'], 0, ',', '.') ?>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
