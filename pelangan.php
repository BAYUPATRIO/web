<?php
// Koneksi ke database
$host = "localhost";  // Server database (default: localhost)
$user = "root";       // Username database (default: root)
$pass = "";           // Password database (default: kosong)
$db = "apt_database";    // Nama database

$conn = new mysqli($host, $user, $pass, $db);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari form
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// Simpan data ke tabel "kontak"
$sql = "INSERT INTO kontak (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";

if ($conn->query($sql) === TRUE) {
    echo "<h3>Pesan berhasil dikirim dan tersimpan di database!</h3>";
    echo "<a href='form.html'>Kembali ke form</a>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Tutup koneksi
$conn->close();
?>
