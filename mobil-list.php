<?php
session_start();
include('conn.php');
// Cek apakah pengguna sudah login atau belum
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: home.php');
    exit;
}
?>
<!doctype html>
<html class="no-js" lang="">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>List Mobil</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
        rel="stylesheet">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/fontAwesome.css">
    <link rel="stylesheet" href="css/tooplate-style.css">
    <script src="https://kit.fontawesome.com/9726f2de4c.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="mobil-list.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script>
        function redirectToPembayaran(button) {
            var idmobil = button.getAttribute("data-idmobil");
            window.location.href = "pembayaran.php?idmobil=" + idmobil;
        }
    </script>
    <nav>
        <div class="navbar">
            <button class="login-button" onclick="redirectToLogout()">Logout</button>
        </div>
    </nav>
    <script>
        function redirectToLogout() {
            window.location.href = 'logout.php';
        }
    </script>
</head>
<body>

    <section class="first-gallery-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Daftar Mobil</h2>
                        <div class="line-dec"></div>
                        <span>Semua Mobil Kami dapat di lihat di bawah</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="send-to-home">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="back-to-home">
                        <span>Jika Masih Ragu Kamu Bisah lihat kembali ke halaman utama</span>
                        <div class="primary-button">
                            <a href="home.php">Kembali Ke Halaman Utama</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="content-wrapper">
        <div class="inner-container container">
            <div class="projects-holder-3">
                <div class="filter-categories">
                    <ul class="project-filter">
                        <li class="filter" data-filter="all">
                            <span>Semua Tipe</span></li>
                        <li class="filter" data-filter="honda">
                            <span>Honda</span></li>
                        <li class="filter" data-filter="toyota">
                            <span>Toyota</span></li>
                        <li class="filter" data-filter="wuling">
                            <span>Wuling</span></li>
                        <li class="filter" data-filter="daihatsu">
                            <span>Daihatsu</span></li>
                    </ul>
                </div>
                <div class="projects-holder">
                    <div class="row">
                        <?php
        // Ambil data mobil dari database
        $sql = "SELECT * FROM data_mobil";
        $result = mysqli_query($conn, $sql);

        // Loop melalui setiap mobil
        while ($row = mysqli_fetch_assoc($result)) {
            $namaMobil = $row['nama_mobil'];
            $gambarMobil = $row['gambar_mobil'];
            $gambardesc = $row['gambar_desc_mobil'];
            $hargasewa = $row['harga_sewa'];
            $brand_mobil = $row['brand_mobil'];
            ?>
                        <div class="col-md-3 col-sm-6 project-item mix <?php echo $brand_mobil; ?>">
                            <div class="image">
                                <a href="img/<?php echo $gambardesc; ?>" data-lightbox="image-1"><img src="img/<?php echo $gambarMobil; ?>"></a>
                            </div>
                            <div class="text">
                                <table>
                                    <tr>
                                        <td>
                                            <span>Rp.<?php echo $hargasewa; ?>/Day</span></td>
                                        <td rowspan="2">
                                            <div class="tombol-pesan1">
                                                <button
                                                    class="tombol-pesan"
                                                    onclick="redirectToPembayaran(this)"
                                                    data-idmobil="<?php echo $row['idmobil']; ?>">Sewa</button>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <h4><?php echo $namaMobil; ?></h4>
                                        </td>
                                        <td></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<footer>
<div id="1h58mh2f5"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-discord fa-beat"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-twitter fa-beat"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-instagram fa-beat"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa-brands fa-whatsapp fa-beat"></i>
                        </a>
                    </li>
                </ul>
                <p>Copyright &copy; 2023 JDGCAR | Design: profile.joshuadjuk.site</p>
            </div>
        </div>
    </div>
</footer>
                                <!--Start of Tawk.to Script-->
                                <script type="text/javascript">
                                    var Tawk_API = Tawk_API || {},
                                        Tawk_LoadStart = new Date();
                                    (function () {
                                        var s1 = document.createElement("script"),
                                            s0 = document.getElementsByTagName("script")[0];
                                        s1.async = true;
                                        s1.src = 'https://embed.tawk.to/64b07d10cc26a871b02846f2/1h58mh2f5';
                                        s1.charset = 'UTF-8';
                                        s1.setAttribute('crossorigin', '*');
                                        s0
                                            .parentNode
                                            .insertBefore(s1, s0);
                                    })();
                                </script>
                                <!--End of Tawk.to Script-->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
    window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')
</script>

<script src="js/vendor/bootstrap.min.js"></script>

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>