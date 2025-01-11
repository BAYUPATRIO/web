<?php
session_start();
if ($_SESSION['role'] != 'user') {
    header("Location: login.html");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Halaman user</title>
</head>
<style>
    /* Reset CSS */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, sans-serif;
}

body {
    background-color: #f8f9fa;
    color: #333;
    line-height: 1.6;
}

/* Header */
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 30px;
    background-color: #fff;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

header .logo {
    font-size: 26px;
    font-weight: bold;
    color: #007BFF;
    text-transform: uppercase;
    letter-spacing: 1.5px;
}

header nav a {
    margin: 0 15px;
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

header nav a:hover {
    color: #007BFF;
}

header .btn {
    padding: 10px 15px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

header .btn-primary {
    background-color: #007BFF;
    color: #fff;
}

header .btn-secondary {
    background-color: #f8f9fa;
    color: #007BFF;
    border: 2px solid #007BFF;
}

header .btn-secondary:hover {
    background-color: #007BFF;
    color: #fff;
}

/* Hero Section */
.hero {
    text-align: center;
    padding: 50px 20px;
    background-color: #333;
    color: #fff;
}

.hero h1 {
    font-size: 40px;
    margin-bottom: 15px;
}

.hero h2 span:first-child {
    color: gold;
    font-weight: bold;
    font-size: 36px;
}

.hero h2 span:last-child {
    color: #007BFF;
    font-weight: bold;
    font-size: 36px;
}

.hero p {
    font-size: 18px;
    margin: 10px 0 20px;
}

.hero .stars {
    font-size: 20px;
    color: gold;
    margin-bottom: 20px;
}

.hero .buttons .btn {
    margin: 5px;
    padding: 10px 20px;
    font-size: 16px;
}

/* Description Section */
.description {
    padding: 30px;
    text-align: center;
    background-color: #fff;
    margin-top: 20px;
}

.description h3 {
    font-size: 28px;
    color: #007BFF;
    margin-bottom: 15px;
}

.description p {
    margin-bottom: 15px;
    color: #555;
}

.description .devices img {
    max-width: 100%;
    height: auto;
    margin-top: 20px;
}

/* Footer */
footer {
    text-align: center;
    padding: 20px;
    background-color: #333;
    color: #fff;
    margin-top: 20px;
}

footer a {
    color: #007BFF;
    text-decoration: none;
    margin: 0 10px;
}

footer a:hover {
    text-decoration: underline;
}
.button {
  padding: 10px 20px;
  color: white;
  background-color: #007bff; /* Warna biru */
  border: none;
  border-radius: 5px; /* Sudut tombol melengkung */
  font-size: 16px; /* Ukuran teks */
  font-weight: bold;
  text-decoration: none;
  text-align: center;
  cursor: pointer;
  transition: all 0.3s ease; /* Efek animasi */
}

.button:hover {
  background-color: #0056b3; /* Warna saat hover */
  transform: scale(1.1); /* Efek memperbesar */
}

.button:active {
  background-color: #003d80; /* Warna saat diklik */
  transform: scale(0.95); /* Efek mengecil */
}


</style>
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
            <img src="gambar-device.png" alt="Perangkat Digital Apotek Dubai">
        </div>
    </div>

    <footer>
        <p>© 2025 Apotek Dubai. Semua Hak Dilindungi.</p>
        <p>Project By : Yuu</p>
        <a href="privasi">Privasi</a> | <a href="syarat">Syarat dan Ketentuan</a>
    </footer>

</body>
</html>

