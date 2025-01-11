<?php
session_start();
session_destroy(); // Hapus semua sesi
header("Location: views/home.php"); // Redirect ke halaman utama
exit;
?>
