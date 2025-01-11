<?php 
// Menghubungkan ke database
include '../produk.php';
// Tangkap input pencarian
$searchQuery = isset($_GET['query']) ? $_GET['query'] : '';
// Ambil data dari tabel "kontak"
$sql = "SELECT * FROM kontak ORDER BY waktu DESC"; // Urutkan berdasarkan waktu terbaru
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="../css/pelangan.css">
</head>
<body>
    <header>
        <table>
        <div class="logo">Apotek Dubai</div>
        <nav>
        </nav>
        <div>
        <a href="../logout.php" class="button">Logout</a>
        </div>
</table>
</header>
    <table>
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['nama'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['pesan'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='6'>Tidak ada data pelanggan.</td></tr>";
            }
            ?>
        </tbody>
    </table>
    <br>
    <a href="home.php">Kembali ke Dashboard</a>
</body>
</html>
