<?php
  require 'conn.php';
  include $view;
  $lihat = new view($conn);
  $hasil = $lihat -> mobil();
  foreach($hasil as $isi);
?>
<!DOCTYPE html>
<html>
<head>
    
  <title>Formulir Pembayaran Sewa Rental Mobil</title>
  <link rel="stylesheet" type="text/css" href="pembayaran.css">
  <script src="https://kit.fontawesome.com/9726f2de4c.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        <script src="https://kit.fontawesome.com/9726f2de4c.js" crossorigin="anonymous"></script>

        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">


</head>
<body style="background-color: #FFEDCB; font-family: 'Poppins', sans-serif;">
  <h1>Formulir Pembayaran Sewa Rental Mobil</h1>
<table class="table">
    <tr>
        <td>
  <div class="container1">
    <form method="POST" action="tambah.php?mobil=tambah">
      <h2>Data Pribadi</h2>
      <?php
      $format = $lihat -> barang_id();
      ?>
      <input type="text" class="form1" id="nama" name="idpembayaran" value="<?php echo $format?>">
      <input type="text" class="form1" id="nama" name="nama_mobil" value="<?php echo $isi['nama_mobil']?>">
      <input type="text" class="form1" id="nama" name="harga_sewa" value="<?php echo $isi['harga_sewa']?>">
      <input type="text" class="form1" id="nama" name="tax" value="0.11">
      <input type="text" class="form1" id="nama" name="total">
      <input type="text" placeholder="Nama" class="form1" id="nama" name="nama" required>
      <input placeholder="alamat" class="form1" type="text" id="alamat" name="alamat" required></input>
      <input placeholder="Nomor Hp" class="form1" type="text" id="nomor_telepon" name="nomor_hp" required>
      <input placeholder="Email" class="form1" type="email" id="email" name="email" required>

      <h2>Data Rental</h2>
      <label for="metode_drop">Metode Pengambilan:</label>
      <div>
        <input type="radio" id="drop_off" name="data_rental" value="drop_off" required>
        <label for="drop_off">Drop Off</label>
      </div>
      <div>
        <input type="radio" id="penjemputan" name="data_rental" value="penjemputan" required>
        <label for="penjemputan">Penjemputan</label>
      </div>

      <h2>Lokasi</h2> 
      <button type="button" class="unggah" id="getLocation">Dapatkan Lokasi</button>
      <input type="hidden" id="latitude" name="latitude">
      <input type="hidden" id="longitude" name="longitude">
      <div name="loc" id="location" type="text" class="form1" placeholder="Lokasi"></div>

      <label for="jam">Jam:</label>
      <input class="form1" type="time" id="jam" name="jam" required>

      <h2>Metode Pembayaran</h2>
      <label>Pilih Metode Pembayaran:</label>
      <div class="radio-image">
        <div class="radio-color"><input type="radio" id="image1" name="metode_pembayaran" value="BNI">
        <label style="display: flex; justify-content:flex-end; " for="image1"><img src="img/payment-bni.png" alt="Gambar 1"></label></div>

        <div class="radio-color"><input type="radio" id="image2" name="metode_pembayaran" value="gambar2">
        <label style="display: flex; justify-content:flex-end; " for="image2"><img src="img/payment-bri.png" alt="Gambar 2"></label></div>

        <div class="radio-color"><input type="radio" id="image3" name="metode_pembayaran" value="gambar3">
        <label style="display: flex; justify-content:flex-end; " for="image3"><img src="img/payment-mandiri.png" alt="Gambar 3"></label></div>
    </div>
      <h2>Unggah Foto KTP</h2> 
      <button class="unggah" id="openModal">Unggah Foto KTP</button>

      <div id="myModal" class="modal">
        <div class="modal-content">
          <span class="close">&times;</span>
          <h2>Pilih Foto KTP</h2>
          <input type="file" id="foto_ktp" name="foto_ktp" accept="image/*" required>
          <button type="button" id="uploadBtn">Upload</button>
        </div>
      </div>
      <h2>Persetujuan Keamanan</h2>
      <div style="display: flex;" class="unggah">
        <input style="display: none;" type="checkbox" id="checkbox1" name="checkbox[]" value="saya_menyetujui" required>
        <label for="checkbox1" class="custom-checkbox"></label>
        <span style="color:black;">Saya Menyetujui Syarat dan Ketentuan</span>
      </div>
      <div style="display: flex;" class="unggah">
        <input style="display: none;" type="checkbox" id="checkbox2" name="checkbox[]" value="saya_bertanggung_jawab" required>
        <label for="checkbox2" class="custom-checkbox"></label>
        <span style="color:black;">Saya Bertanggung Jawab atas Penggunaan Kendaraan</span>
      </div>
      <button type="submit">Bayar</button>
    </form>
  </div>

<!-- script untuk upload ktp -->
  <script>
    document.getElementById("openModal").addEventListener("click", function() {
      document.getElementById("myModal").style.display = "block";
    });

    document.getElementById("uploadBtn").addEventListener("click", function() {
      document.getElementById("myModal").style.display = "none";
    });

    document.getElementsByClassName("close")[0].addEventListener("click", function() {
      document.getElementById("myModal").style.display = "none";
    });
  </script>
<!-- Script Untuk Lokasi -->
<script>
    document.getElementById("getLocation").addEventListener("click", function() {
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(getLocationName);
      } else {
        alert("Geolocation tidak didukung oleh peramban ini.");
      }
    });

    function getLocationName(position) {
      var latitude = position.coords.latitude;
      var longitude = position.coords.longitude;
      document.getElementById("latitude").value = latitude;
      document.getElementById("longitude").value = longitude;

      var url = "https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=" + latitude + "&lon=" + longitude;

      fetch(url)
        .then(response => response.json())
        .then(data => {
          var locationName = data.display_name;
          document.getElementById("location").innerText = "Lokasi: " + locationName;
        })
        .catch(error => {
          console.log("Terjadi kesalahan:", error);
        });
    }
  </script>
  </td>
  <td>
  <div class="container3">
  <h2>Rental Detail</h2>
    <p>Harga sewaktu waktu dapat berubah</p>
    <table>
        <tr>
            <td>
                <img src="img/all-new-avanza-pict.png" alt="Gambar Mobil" class="car-image">
            </td>
            <td style="width: 50%;">
    <div class="car-info">
      <div>
        <span style="font-size: 20px;">      
          <?php
            echo $isi['nama_mobil'];
          ?>
        </span>
      </div>
    </div>
    </td>
        </tr>
    </table>   
    <div class="subtotal">
      Rp.
      <?php
      echo $isi['harga_sewa'];
      ?>
    </div>
    <div class="tax">
      Tax: 11%
    </div>
    <div class="promo-code">
      <input type="text" placeholder="Masukkan kode promo">
    </div>
    <div class="total">
      Total: $110
    </div>
  </div>
  </td>
  </tr>
  </table>
  <footer>
          <div class="container">
            <div class="row1">
              <div class="col-md-12">
                <ul>
                  <li><a href="#"><i class="fa-brands fa-discord fa-beat"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-twitter fa-beat"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-instagram fa-beat"></i></a></li>
                  <li><a href="#"><i class="fa-brands fa-whatsapp fa-beat"></i></a></li>
                </ul>
                <p>Copyright &copy; 2023 JDGCAR
                        
                        | Design: profile.joshuadjuk.site</p>
              </div>
            </div>
          </div>
        </footer>
</body>
</html>
