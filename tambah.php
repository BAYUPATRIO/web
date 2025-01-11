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

// Ambil data dari formulir
$name = $_POST['name'];
$benefit = $_POST['benefit'];
$description = $_POST['description'];
$price = $_POST['price'];
$image_url = $_FILES['image']['name'];

// Upload gambar
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

// Simpan data ke tabel `product_entries`
$sql = "INSERT INTO product_entries (name, benefit, description, price, image_url) VALUES ('$name', '$benefit', '$description', '$price', '$image_url')";

if ($conn->query($sql) === TRUE) {
    // Redirect ke halaman produk
    header("Location: views/produk.php");
    exit(); // Pastikan skrip berhenti setelah redirect
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

 

$conn->close();
?>
