<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>JDG Rent Car</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800"
        rel="stylesheet">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!-- <link rel="stylesheet" href="css/fontAwesome.css"> -->
    <link rel="stylesheet" href="css/tooplate-style.css">

    <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://kit.fontawesome.com/9726f2de4c.js" crossorigin="anonymous"></script>
</head>
<body>
    <style>
        .welcome-message {
            background-color: #FFC700;
            padding: 10px 20px;
            border-radius: 20px;
            font-size: 18px;
            font-weight: lighter;
            color: #333;
            display: inline-block;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.1);
        }
    </style>
    <?php
    if(isset($_GET['success'])){
    ?>
    <div class="alert alert-success">
        <p>Pembayaran Berhasil</p>
    </div>
    <?php
}
?>
    <nav>
        <div class="navbar">
            <button class="login-button" onclick="redirectToLogout()">Logout</button>
        </div>
    </nav>
    <script>
        function redirectToLogout() {
            window.location.href = 'logout.php';
        }
        function redirectTolist() {
            window.location.href = 'mobil-list.php';
        }
    </script>

    <section class="first-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h2>Kemudahan Perjalanan Anda Kendaraan Terpercaya Kami</h2>
                        <div class="line-dec"></div>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="header-second-section">
        <h1>Cara kerja</h1>
        <h2>Berikut adalah cara kerja pada sistem web kami.</h2>
    </section>
    <section class="second-section">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="service-item">
                        <div class="icon">
                            <img src="img/first-icon.png" alt="">
                        </div>
                        <h4>Pilih Lokasi</h4>
                        <p>Tentukan lokasi penjemputan dan Drop terlebih dahulu ya..</p>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <div class="icon">
                                    <img src="img/second-icon.png" alt="">
                                </div>
                                <h4>Tanggal Pemesanan</h4>
                                <p>Jangan lupa tentukan tanggal dan hari juga ya cuy. jangan ada yang salah.</p>
                            </div>
                        </div>
                        <div class="container">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <div class="icon">
                                        <img src="img/third-icon.png" alt="">
                                    </div>
                                    <h4>Pilih Mobil</h4>
                                    <p>Pilih mobil kesukaanmu untuk menemani perjalananmu yang luar biasa.</p>
                                </div>
                            </div>
                            <div class="container">
                                <div class="col-md-3 col-sm-6">
                                    <div class="service-item">
                                        <div class="icon">
                                            <img src="img/fourth-icon.png" alt="">
                                        </div>
                                        <h4>Lakukan Pembayaran</h4>
                                        <p>Pembayaran dapat di lakukan langsung di situs kami</p>
                                    </div>
                                </div>
                            </section>

                            <section class="third-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div style="text-align: center;">
                                                <h4>JGDCAR.</h4>
                                                <p>JGDCAR Rental Mobil adalah sebuah perusahaan yang bergerak di bidang
                                                    penyewaan mobil untuk berbagai keperluan. Kami menyediakan berbagai jenis mobil
                                                    yang berkualitas dan terawat dengan baik untuk memenuhi kebutuhan perjalanan dan
                                                    transportasi Anda. Dengan pengalaman kami yang luas dalam industri ini, kami
                                                    bertujuan untuk memberikan layanan rental mobil yang cepat, mudah, dan
                                                    terpercaya kepada pelanggan kami.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="fourth-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-6">
                                            <div class="portfolio-item first-item">
                                                <div class="image">
                                                    <a href="img/all-new-avanza-desc.png" data-lightbox="image-1"><img src="img/all-new-avanza-pict.png"></a>
                                                </div>
                                                <div class="text">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <span>Nature</span></td>
                                                            <td rowspan="2">
                                                                <div class="tombol-pesan1">
                                                                    <button class="tombol-pesan" onclick="redirectTopembayaran()">Sewa</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Robotic Light</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="portfolio-item second-item">
                                                <div class="image">
                                                    <a href="img/all-new-terios-desc.png" data-lightbox="image-1"><img src="img/all-new-terios-pict.png"></a>
                                                </div>
                                                <div class="text">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <span>Nature</span></td>
                                                            <td rowspan="2">
                                                                <div class="tombol-pesan1">
                                                                    <button class="tombol-pesan" onclick="redirectToSewa()">Sewa</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Robotic Light</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="portfolio-item third-item">
                                                <div class="image">
                                                    <a href="img/brio-desc.png" data-lightbox="image-1"><img src="img/brio-pict.png"></a>
                                                </div>
                                                <div class="text">
                                                    <table>
                                                        <tr>
                                                            <td>
                                                                <span>Nature</span></td>
                                                            <td rowspan="2">
                                                                <div class="tombol-pesan1">
                                                                    <button class="tombol-pesan" onclick="redirectToSewa()">Sewa</button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <h4>Robotic Light</h4>
                                                            </td>
                                                            <td></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3 col-sm-6">
                                            <div class="send-to-portfolio">
                                                <span>Lihat Mobil Lebih Banyak</span>
                                                <div class="primary-button">
                                                    <a href="mobil-list.php">Klik Di Sini</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="fivth-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-10 col-md-offset-1">
                                            <div class="left-text col-md-8">
                                                <h4>
                                                    <em>JGDCAR</em><br>Kenapa Harus Kami?</h4>
                                                <p style="font-size: 20px;">Pilih JDG Rental sebagai penyedia jasa penyewaan
                                                    mobil karena mereka menawarkan ketersediaan armada yang luas, kondisi mobil yang
                                                    terawat, layanan pelanggan yang profesional, harga yang kompetitif,
                                                    fleksibilitas dalam penyewaan, keamanan, dan kemudahan proses pemesanan. Dengan
                                                    JDG Rental, Anda dapat memilih mobil sesuai kebutuhan, merasa aman dan nyaman,
                                                    mendapatkan bantuan yang ramah, menghemat anggaran, memilih durasi penyewaan
                                                    yang sesuai, merasa terlindungi, dan mengatur penyewaan mobil dengan mudah.</p>
                                            </div>
                                            <div class="right-image col-md-4">
                                                <img src="img/right-image.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <section class="sixth-section">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="row">
                                                <form id="contact" action="" method="post">
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <input
                                                                name="name"
                                                                type="text"
                                                                class="form-control"
                                                                id="name"
                                                                placeholder="Your name..."
                                                                required="required">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <fieldset>
                                                            <input
                                                                name="email"
                                                                type="email"
                                                                class="form-control"
                                                                id="email"
                                                                placeholder="Your email..."
                                                                required="required">
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset>
                                                            <textarea
                                                                name="message"
                                                                rows="6"
                                                                class="form-control"
                                                                id="message"
                                                                placeholder="Your message..."
                                                                required="required"></textarea>
                                                        </fieldset>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <fieldset>
                                                            <button type="submit" id="form-submit" class="btn">Send Message</button>
                                                        </fieldset>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="col-md-5">
                                            <div class="right-info">
                                                <ul>
                                                    <li>
                                                        <a href="">
                                                            <i class="fa fa-envelope"></i>contact@joshuadjuk.site</li>
                                                        <li>
                                                            <a href="https://wa.me//+6285391081942">
                                                                <i class="fa fa-phone"></i>0853-9108-1942</a>
                                                        </li>
                                                        <li>
                                                            <a href="https://goo.gl/maps/VzUK9i2rFUx2iC8w9">
                                                                <i class="fa fa-map-marker"></i>Malang,Jawa Timur</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>

                                <footer>
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div id="1h58mh2f5"></div>
                                                <ul>
                                                    <li>
                                                        <a href="https://discord.gg/qCVgd7q">
                                                            <i class="fa-brands fa-discord fa-beat"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://twitter.com/_sijooo">
                                                            <i class="fa-brands fa-twitter fa-beat"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://www.instagram.com/galihyogaa_/#">
                                                            <i class="fa-brands fa-instagram fa-beat"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="https://wa.me//+6285391081942">
                                                            <i class="fa-brands fa-whatsapp fa-beat"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <p>Copyright &copy; 2023 JDGCAR | Design: profile.joshuadjuk.site W/ @rinmachy.</p>
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