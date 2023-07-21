<?php
session_start();
include 'conn.php';
if (!isset($_SESSION['loggedin']) || $_SESSION['role'] !== 'admin') {
    header('Location: login.php'); // Redirect to login.php or any other page you want
    exit;
}
if (isset($_POST['update'])) {
    $idpembayaran = $_POST['update'];
    $status = $_POST['status'][$idpembayaran];

    $updateQuery = "UPDATE pembayaran SET status_pembayaran = '$status' WHERE idpembayaran = '$idpembayaran'";
    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        $getDataQuery = "SELECT nama, nomor_hp, nama_mobil, total FROM pembayaran WHERE idpembayaran = '$idpembayaran'";
        $getDataResult = mysqli_query($conn, $getDataQuery);
        if ($getDataResult && mysqli_num_rows($getDataResult) > 0) {
            $row = mysqli_fetch_assoc($getDataResult);
            $namapemesan = $row['nama'];
            $nomorhp = $row['nomor_hp'];
            $namaMobil = $row['nama_mobil'];
            $total = $row['total'];

            date_default_timezone_set('Asia/Jakarta');
            $waktu = date("H:i:s");

            $pesan = "";
            if ($waktu >= "05:00:00" && $waktu < "10:00:00") {
                $pesan = "Halo $namapemesan, selamat pagi. Pesanan kamu sekarang sedang $status untuk mobil $namaMobil dengan total pembayaran sebesar Rp. $total. Kami akan mengkonfirmasi lebih lanjut.";
            } elseif ($waktu >= "10:00:00" && $waktu < "15:00:00") {
                $pesan = "Halo $namapemesan, selamat siang. Pesanan kamu sekarang sedang $status untuk mobil $namaMobil dengan total pembayaran sebesar Rp. $total. Kami akan mengkonfirmasi lebih lanjut.";
            } elseif ($waktu >= "15:00:00" && $waktu < "18:00:00") {
                $pesan = "Halo $namapemesan, selamat sore. Pesanan kamu sekarang sedang $status untuk mobil $namaMobil dengan total pembayaran sebesar Rp. $total. Kami akan mengkonfirmasi lebih lanjut.";
            } else {
                $pesan = "Halo $namapemesan, selamat malam. Pesanan kamu sekarang sedang $status untuk mobil $namaMobil dengan total pembayaran sebesar Rp. $total. Kami akan mengkonfirmasi lebih lanjut.";
            }

            $whatsappLink = "https://wa.me/$nomorhp?text=" . urlencode($pesan);
            echo "<script>window.location.href = '$whatsappLink';</script>";
        }
    } else {
        echo "<script>alert('Gagal memperbarui status pembayaran.');</script>";
    }
}
?>

<html>
<head>
    <style>
        /* Style untuk form */
        form {
            margin-bottom: 20px;
        }

        label {
            font-weight: bold;
        }

        select {
            margin-right: 10px;
        }

        button {
            padding: 5px 10px;
            background-color: #FFC700;
            color: white;
            border: none;
            cursor: pointer;
        }

        /* Style untuk tabel */
        table {
            border-collapse: collapse;
            width: 100%;
            border-radius: 20px;
        }

        td,
        th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        th {
            background-color: #FFC700;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:nth-child(odd) {
            background-color: #ffffff;
        }

        /* Style untuk container */
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }

        .navbar-logo {
            font-size: 20px;
            font-weight: bold;
            color: white;
            margin-right: 20px;
        }

        .navbar-buttons {
            display: flex;
            gap: 10px;
        }

        .navbar-buttons a {
            padding: 8px 15px;
            background-color: #FFC700;
            color: white;
            border-radius: 5px;
            text-decoration: none;
        }

        .container {
            max-width: 100%;
            margin: auto;
        }
    </style>
</head>
<body style="background-color: #FFFDE7;">
    <div class="navbar">
        <img src="img/logo.png" alt="Logo" class="navbar-logo">
        <div class="navbar-buttons">
            <a href="home.php">Home</a>
            <a href="graph.php">Graph</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="container">
        <form method="post">
            <label for="filter-nama">Filter berdasarkan nama:</label>
            <select name="filter-nama" id="filter-nama">
                <option value="">Semua</option>
                <?php
                $query = "SELECT DISTINCT nama FROM pembayaran";
                $result = mysqli_query($conn, $query);

                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value='".$row['nama']."'>".$row['nama']."</option>";
                    }
                }
                ?>
            </select>
            <button type="submit" name="submit">Filter</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $nama = $_POST['filter-nama'];

            $query = "SELECT * FROM pembayaran";
            if (!empty($nama)) {
                $query .= " WHERE nama = '$nama'";
            }

            $result = mysqli_query($conn, $query);

            echo "<h2>Data Pembayaran</h2>";
            echo "<table>";
            echo "<tr><th>ID Pembayaran</th><th>Nama</th><th>Alamat</th><th>Nomor HP</th><th>Email</th><th>Data Rental</th><th>Jam</th><th>Metode Pembayaran</th><th>Nama Mobil</th><th>Harga Sewa</th><th>Tax</th><th>Total</th><th>Tanggal Pinjam</th><th>Tanggal Kembali</th><th>Selisih Hari</th><th>Status Pembayaran</th><th>Aksi</th></tr>";
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $tanggal_pinjam = $row['tanggal_pinjam'];
                    $tanggal_kembali = $row['tanggal_kembali'];
                    
                    // Perbaikan: Memastikan nilai tanggal_pinjam dan tanggal_kembali tidak null
                    if (!empty($tanggal_pinjam) && !empty($tanggal_kembali)) {
                        $selisih_hari = (strtotime($tanggal_kembali) - strtotime($tanggal_pinjam)) / (60 * 60 * 24);
                    } else {
                        $selisih_hari = 0; // Atau nilai default yang sesuai dengan logika aplikasi Anda
                    }

                    echo "<tr>";
                    echo "<td>".$row['idpembayaran']."</td>";
                    echo "<td>".$row['nama']."</td>";
                    echo "<td>".$row['alamat']."</td>";
                    echo "<td>".$row['nomor_hp']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['data_rental']."</td>";
                    echo "<td>".$row['jam']."</td>";
                    echo "<td>".$row['metode_pembayaran']."</td>";
                    echo "<td>".$row['nama_mobil']."</td>";
                    echo "<td>".$row['harga_sewa']."</td>";
                    echo "<td>".$row['tax']."</td>";
                    echo "<td>".$row['total']."</td>";
                    echo "<td>".$tanggal_pinjam."</td>";
                    echo "<td>".$tanggal_kembali."</td>";
                    echo "<td>".$selisih_hari."</td>";
                    echo "<td>
                            <select name='status[".$row['idpembayaran']."]'>
                                <option value='Belum Di Konfirmasi' ".(isset($row['status_pembayaran']) && $row['status_pembayaran'] == 'Belum Di Konfirmasi' ? 'selected' : '').">Belum Di Konfirmasi</option>
                                <option value='di bayar' ".(isset($row['status_pembayaran']) && $row['status_pembayaran'] == 'di bayar' ? 'selected' : '').">Di Bayar</option>
                                <option value='di proses' ".(isset($row['status_pembayaran']) && $row['status_pembayaran'] == 'di proses' ? 'selected' : '').">Di Proses</option>
                                <option value='di pinjam' ".(isset($row['status_pembayaran']) && $row['status_pembayaran'] == 'di pinjam' ? 'selected' : '').">Di Pinjam</option>
                                <option value='selesai' ".(isset($row['status_pembayaran']) && $row['status_pembayaran'] == 'selesai' ? 'selected' : '').">Selesai</option>
                            </select>
                          </td>";
                    echo "<td><button type='button' onclick='updateStatus(".$row['idpembayaran'].")'>Update</button></td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='16'>Tidak ada data yang sesuai.</td></tr>";
            }
            echo "</table>";
        }
        ?>
        <script>
            function updateStatus(idpembayaran) {
                var status = document.querySelector("select[name='status[" + idpembayaran + "]']").value;
                if (status !== "") {
                    var xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            alert('Status pembayaran berhasil diperbarui.');

                            var xhttpData = new XMLHttpRequest();
                            xhttpData.onreadystatechange = function() {
                                if (this.readyState === 4 && this.status === 200) {
                                    var data = JSON.parse(this.responseText);
                                    var namapemesan = data.nama;
                                    var nomorhp = data.nomor_hp;

                                    var d = new Date();
                                    var waktu = d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds();

                                    var pesan = "";
                                    if (waktu >= "05:00:00" && waktu < "10:00:00") {
                                        pesan = "Halo " + namapemesan + ", selamat pagi. Pesanan kamu sekarang sedang " + status + " untuk mobil " + data.nama_mobil + " dengan total pembayaran sebesar Rp. " + data.total + ". Kami akan mengkonfirmasi lebih lanjut.";
                                    } else if (waktu >= "10:00:00" && waktu < "15:00:00") {
                                        pesan = "Halo " + namapemesan + ", selamat siang. Pesanan kamu sekarang sedang " + status + " untuk mobil " + data.nama_mobil + " dengan total pembayaran sebesar Rp. " + data.total + ". Kami akan mengkonfirmasi lebih lanjut.";
                                    } else if (waktu >= "15:00:00" && waktu < "18:00:00") {
                                        pesan = "Halo " + namapemesan + ", selamat sore. Pesanan kamu sekarang sedang " + status + " untuk mobil " + data.nama_mobil + " dengan total pembayaran sebesar Rp. " + data.total + ". Kami akan mengkonfirmasi lebih lanjut.";
                                    } else {
                                        pesan = "Halo " + namapemesan + ", selamat malam. Pesanan kamu sekarang sedang " + status + " untuk mobil " + data.nama_mobil + " dengan total pembayaran sebesar Rp. " + data.total + ". Kami akan mengkonfirmasi lebih lanjut.";
                                    }

                                    var whatsappLink = "https://wa.me/" + nomorhp + "?text=" + encodeURIComponent(pesan);
                                    window.location.href = whatsappLink;
                                } else if (this.readyState === 4 && this.status !== 200) {
                                    alert('Gagal memperbarui status pembayaran.');
                                }
                            };
                            xhttpData.open("GET", "get_pemesan_data.php?idpembayaran=" + idpembayaran, true);
                            xhttpData.send();
                        } else if (this.readyState === 4 && this.status !== 200) {
                            alert('Gagal memperbarui status pembayaran.');
                        }
                    };
                    xhttp.open("POST", "update_status.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    xhttp.send("idpembayaran=" + idpembayaran + "&status=" + status);
                }
            }
        </script>
    </div>
</body>
</html>
