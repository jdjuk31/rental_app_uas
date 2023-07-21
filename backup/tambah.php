<?php
include 'conn.php';

// Memeriksa apakah permintaan adalah POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    $idpembayaran = $_POST["idpembayaran"];
    $nama_mobil = $_POST["nama_mobil"];
    $harga_sewa = $_POST["harga_sewa"];
    $tax = $_POST["tax"];
    $total1 = $harga_sewa * $tax;
    $total = $harga_sewa + $total1;
    $nama = $_POST["nama"];
    $alamat = $_POST["alamat"];
    $nomor_hp = $_POST["nomor_hp"];
    $email = $_POST["email"];
    $data_rental = $_POST["data_rental"];
    $latitude = $_POST["latitude"];
    // $longitude = $_POST["longitude"];
    $jam = $_POST["jam"];
    $metode_pembayaran = $_POST["metode_pembayaran"];

    // Membuat query SQL untuk memasukkan data ke database
    $sql = "INSERT INTO pembayaran ( nama, alamat, nomor_hp, email, data_rental, lokasi, jam, metode_pembayaran, nama_mobil, subtotal, tax, total)
    VALUES ('$nama', '$alamat', '$nomor_hp', '$email', '$data_rental', '$latitude', '$jam', '$metode_pembayaran', '$nama_mobil', '$harga_sewa', '$tax', '$total')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil ditambahkan ke database.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Menutup koneksi ke database
$conn->close();
?>