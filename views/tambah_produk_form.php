<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<style>
   
</style>
<body>
    <h2>Tambah Produk Baru</h2>
    <form action="../tambah.php" method="post">
        <label for="name">Nama Produk:</label><br>
        <input type="text" id="name" name="name" required><br><br>

        <label for="benefit">Manfaat:</label><br>
        <textarea id="benefit" name="benefit" required></textarea><br><br>

        <label for="description">Penjelasan:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>

        <label for="price">Harga:</label><br>
        <input type="number" step="0.01" id="price" name="price" required><br><br>

        <label for="image">Upload Gambar:</label><br>
        <input type="file" id="image" name="image" accept="image/*" required><br><br>

        <button type="submit">Tambah Produk</button>
    </form>
</body>
</html>
<?php
