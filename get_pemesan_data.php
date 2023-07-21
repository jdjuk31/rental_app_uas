<?php
// Include file conn.php
include 'conn.php';

// Pastikan parameter idpembayaran ada dalam request
if (!isset($_GET['idpembayaran'])) {
    echo "Parameter idpembayaran tidak valid.";
    exit();
}

$idpembayaran = $_GET['idpembayaran'];

// Query untuk mengambil data pemesan berdasarkan id pembayaran
$query = "SELECT nama, nomor_hp, nama_mobil, total FROM pembayaran WHERE idpembayaran = '$idpembayaran'";
$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil dieksekusi
if (!$result) {
    echo "Gagal mengambil data pemesan.";
    exit();
}

// Memeriksa apakah data pemesan ditemukan
if (mysqli_num_rows($result) == 0) {
    echo "Data pemesan tidak ditemukan.";
    exit();
}

// Mengambil data pemesan
$row = mysqli_fetch_assoc($result);
$data = [
    'nama' => $row['nama'],
    'nomor_hp' => $row['nomor_hp'],
    'nama_mobil' => $row['nama_mobil'],
    'total' => $row['total']
];

// Mengirimkan data dalam format JSON
header('Content-Type: application/json');
echo json_encode($data);
?>
