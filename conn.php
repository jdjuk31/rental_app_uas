<?php
    $servername = "172.24.0.2";
    $database = "projectuas";
    $username = "root";
    $password = "password";

    // try{
    //     $conn = new PDO("mysql:host = $servername;dbname=$database", $username, $password);
    // }catch(PDOException $e){
    //     echo 'koneksi gagal' .$e -> getMessage();
    // }
    $view = 'view.php';

    $conn = mysqli_connect($servername, $username,$password, $database);
    if(mysqli_connect_errno())
        echo "Koneksi Gagal";

    $nomorAdminWhatsApp = "6285391081942";
?>