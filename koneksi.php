<?php
$servername = "clg8u8s24001ono9bs6jpklyc";
$database = "clg8u8s23000k9bno78qmf3ca";
$username = "clg8u8s1z000i9bnod9efdd4g";
$password = "ZTUfTJ8bJVi1QKw0VKq94Dkq";
 
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
