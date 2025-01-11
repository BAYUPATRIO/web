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
    <title>Produk - Apotek Dubai</title>
    <link rel="stylesheet" href="../css/produk.css">
</head>
<body>
<header>
        <table>
        <div class="logo">Apotek Dubai</div>
        <div style="margin-bottom: 15px; text-align: center;">
        <form method="GET" action="produk.php">
        <input
            type="text"
            name="query"
            placeholder="Cari produk"
            style="width: 70%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; outline: none;"
            value=""/>
        <button type="submit" style="padding: 10px 20px; background-color: #007BFF; color: #fff; border: none; border-radius: 5px; cursor: pointer;">
            Cari
        </button>
    </form>
</div>
        <nav>
            <a href="home.php">Home</a>
            <a href="produk.php">Produk</a>
            <a href="panduan.html">Panduan</a>
        </nav>
        <div>
        <a href="../logout.php" class="button">Logout</a>
        </div>
</table>
    </header>
    <h1>Daftar Produk</h1>
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
            echo '<a href="lihat.php?id=' . $row['id'] . '" class="btn-lihat">';
            echo '<button class="lihat-btn">Lihat</button>';
            echo "</div><hr>";
        }
    } else {
        echo "Belum ada produk yang ditambahkan.";
    }

    $conn->close();
    ?>
</div>
    <footer>
    <a href="tambah_produk_form.php">Tambah Produk Baru</a>
        <p>© 2025 Apotek Dubai. Semua Hak Dilindungi.</p>
        <a href="privasi">Privasi</a> | <a href="syarat">Syarat dan Ketentuan</a>
    </footer>
</body>
</html>
