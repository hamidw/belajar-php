<?php
$servername = "clg8tsz3c001eno9bha8g7jgy";
$database = "belajar";
$username = "user_b";
$password = "112233456";
 
// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>
