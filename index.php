<?php
// mulai session
session_start();

// menghubungkan dengan koneksi
include 'koneksi.php';

//cek status login
if(!isset($_SESSION['status'])){
    header("location:login.php?pesan=belum_login");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Zakat</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/menu.css">
    <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
        <div id="wrapper" class="active">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <ul id="sidebar_menu" class="sidebar-nav">
            <li class="sidebar-brand"><img class="img-thumbnail" src="assets/img/1.png" alt="" style="width: 100px; height: 100px; margin-top:10px;border-radius: 20px 20px 20px 20px;"></li>
        </ul>
        <ul id="sidebar_menu" class="sidebar-nav" style="margin-top: 60px;">
            <li class="sidebar-brand"><a id="menu-toggle" href="index.php">Beranda<span id="main_icon"></a></li>
        </ul>
        <ul class="sidebar-nav" id="sidebar">     
            <li><a href="add_data.php">Tambah Data Zakat</a></li>
            <li><a href="list_data.php">Data Zakat</a></li>
            <li><a href="logout.php">Keluar</a></li>
        </ul>
        </div>
          
      <!-- Page content -->
      <div id="page-content-wrapper">
        <div class="page-content inset">
          <div class="row">
              <div class="col-md-12">
              <p class="well lead" style="margin-top: 10px;">Beranda</p>
            </div>
          </div>
        </div>

        <div class="page-content inset">
          <div class="jumbotron" style="margin: 20px 20px 20px 20px; padding: 20px 20px 20px 20px">
              <h2 class="text-center">
              UTS Pemrograman Web Lanjutan SI-3
              </h2>
              <h3 class="text-center">
              Sistem Untuk Mendata Pembayaran Zakat Masjid Taqwa Tuntungan
              </h3>
              <br>
              <p>
                Muhammad Ridho Fasya <br>
                  <ul>
                    <li>NIM : 0702193197</li>
                    <li>Sistem Informasi-3</li>
                    <li>Dosen : Suendri M.Kom</li>
                  </ul>
              </p>
          </div>
        </div>
        
      </div>
      
    </div>
</body>
</html>