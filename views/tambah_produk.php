<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apt_database";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data produk dari tabel `product_entries`
$sql = "SELECT * FROM product_entries ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
</head>
<body>
<a href="tambah_produk_form.php">Tambah Produk Baru</a>
    <h1>Daftar Produk</h1>
    <a href="tambah_produk_form.php">Tambah Produk Baru</a>
    <hr>

    <?php
    // Tampilkan produk
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<div>";
            echo "<img src='uploads/" . $row['image_url'] . "' alt='" . $row['name'] . "' style='width:150px;height:auto;'><br>";
            echo "<h3>" . $row['name'] . "</h3>";
            echo "<p><strong>Manfaat:</strong> " . $row['benefit'] . "</p>";
            echo "<p><strong>Penjelasan:</strong> " . $row['description'] . "</p>";
            echo "<p><strong>Harga:</strong> Rp " . number_format($row['price'], 2, ',', '.') . "</p>";
            echo "</div><hr>";
        }
    } else {
        echo "Belum ada produk yang ditambahkan.";
    }

    $conn->close();
    ?>
</body>
</html>
