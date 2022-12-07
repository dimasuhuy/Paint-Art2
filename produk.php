<?php

require_once 'functions.php';
session_start();
// error_reporting(0);
$userLevel = 'guest';
$userName = null;
if (isset($_SESSION['login'])) {
    if ($_SESSION['level'] == 'admin') {
        header('Location: http://localhost/skurent_project/admin/index.php');
    } else {    
        $userLevel = $_SESSION['level'];
        $userName = $_SESSION['name'];
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Paint Art</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body class="sub_page">

  <div class="hero_area">

  <!--navigation-->  
  <header>
    <link rel="stylesheet" href="uy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <div class="wrapper">
      <nav>
        <input type="checkbox" id="show-search">
        <input type="checkbox" id="show-menu">
        <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
        <div class="content">
        <div class="logo"><a href="#">Paint Art</a></div>
          <ul class="links">
            <li><a href="index.php">Beranda</a></li>
            <li><a href="lukisan.php">Lukisan</a></li>
            <li><a href="about.php">Tentang</a></li>
          <?php if($userLevel != 'user') : ?>
            <li><a href="masuk.php">Masuk</a></li>
            <?php else : ?>
          <li><a href="logout.php">Keluar</a></li>
          <?php endif; ?>
          </ul>
        </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Ketik sesuatu untuk mencari..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
      
      <div class="user_option-box">
      <?php if($userLevel != 'user') : ?>
        <a href="masuk.php">
          <i class="fa fa-user" aria-hidden="true"></i>
        </a>
      <?php else : ?>
        <a href="#">
          <i class="fa fa-user" aria-hidden="true"></i>
        </a>
          <?php endif; ?>
      </div>
      </nav>
    </div>
      </header>
    <!--navigation-->  

  <!-- contact section -->

  <section class="produk_section layout_padding">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="Produk/hewan/4.png" alt="">
          </div>
          <div class="deskripsi">
              <h5> Deskripsi</h5>
          Migration memiliki arti migrasi yg memiliki makna bangau yang bebas mencari tujuan hidup dengan bebas tanpa halangan
          </div>
        </div>
          <div class="form_container">
            <div class="heading_container">
              <h1>
                Migration
              </h1>
              <h4>Rp 1.200.000</h4>
            </div>
            <div>
             <table >
              <tr>
                <h5>Spesifikasi</h5>
              </tr>
              <tr>
                <td>Pencipta </td>
                <td>:</td>
                <td>Dims the Artos</td>
              </tr>
              <tr>
                <td>Kanvas </td>
                <td>:</td>
                <td>Kanvas terpal</td>
              </tr>
              <tr>
                <td>Ukuran bingkai </td>
                <td>:</td>
                <td>150cm x 90cm</td>
              </tr>
              <tr>
                <td>Warna bingkai </td>
                <td>:</td>
                <td>Hitam</td>
              </tr>
              <tr>
                <td>Gantungan </td>
                <td>:</td>
                <td>besi</td>
              </tr>
             </table>
             <table>
              <tr>
                <td>Harga sudah termasuk bingkai dan packing</td>
              </tr>
              <tr>
                <td>(setiap lukisan di PAINT ART ori tidak ada duplikat).</td>
              </tr>
             </table>
             <div class="bu" style="display: flex; justify-content: center;">
              <div class="btn-box2">
                <?php if($userLevel != 'user') : ?>
                <a href="masuk.php">
                  Beli
                </a>
                <?php else : ?>
                <a href="#">
                  Beli
                </a>
                <?php endif; ?>
              </div>
             </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end contact section -->

  <!-- footer section -->
  <footer class="footer_section2">
    <div class="container">
      <div class="footer-info">
        <p>
          © <span id="displayYear">2022</span> All Rights Reserved By Paint Art
        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
  <!-- End Google Map -->

</body>

</html>