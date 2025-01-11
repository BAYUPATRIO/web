<?php
session_start();

// Periksa apakah pengguna sudah login
if ($_SESSION['role'] != 'admin') {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama</title>
    <link rel="stylesheet" href="../css/home.css">
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
            value=""
        />
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
        <a href="pelangan.php" class="button">Pelangan</a>
        <a href="../logout.php" class="button">Logout</a>
        </div>
</table>
    </header>
    <div class="hero">
        <h1>Software Apotek Andal</h1>
        <h2>
            <span>Apotek</span><span>Dubai</span>
    </div>

    <div class="description">
        <h3>Mengapa Memilih Apotek Dubai?</h3>
        <table>
        <p>Apotek Dubai adalah solusi digital yang dirancang untuk mempermudah manajemen apotek Anda. Dengan fitur lengkap, mudah digunakan, dan didukung teknologi canggih, kami hadir untuk mendukung kesuksesan bisnis Anda.</p>
        <p>Gunakan Apotek Dubai untuk meningkatkan efisiensi, mengelola stok, dan memberikan pelayanan terbaik kepada pelanggan Anda.</p>
</table>
        <div class="devices">
            <img src="../.jpg" alt="Perangkat Digital Apotek Dubai">
        </div>
    </div>

    <footer>
        <p>© 2025 Apotek Dubai. Semua Hak Dilindungi.</p>
        <p>Project By : Yuu</p>
        <a href="privasi">Privasi</a> | <a href="syarat">Syarat dan Ketentuan</a>
    </footer>

</body>
</html>
