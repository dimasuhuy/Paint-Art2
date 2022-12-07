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
  <link rel="shortcut icon" href="images/a.png" type="image/x-icon">

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

  <!-- shop section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h1>
            Manusia
        </h1>
      </div>
      <div class="row">
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="produk/manusia/1.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                  Manen
                </h6>
                <h6>
                  <span>
                    Rp.300.000
                  </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="produk/manusia/2.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                    Matun
                </h6>
                <h6>
                  <span>
                    Rp.350.000
                  </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="produk/manusia/3.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                    Perjuangan
                </h6>
                <h6>
                  <span>
                    Rp.435.000
                  </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="produk/manusia/4.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                    Bisikan
                </h6>
                <h6>
                  <span>
                    Rp.345.000
                  </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="produk/manusia/5.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                    Canting
                </h6>
                <h6>
                  <span>
                    Rp.230.000
                  </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="produk/manusia/6.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                    Vincent van Gogh
                </h6>
                <h6>
                  <span>
                    Rp.250.000
                  </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-6 col-xl-3">
          <div class="box">
            <a href="">
              <div class="img-box">
                <img src="produk/manusia/7.png" alt="">
              </div>
              <div class="detail-box">
                <h6>
                    Kasih ibu
                </h6>
                <h6>
                  <span>
                    Rp.500.000
                  </span>
                </h6>
              </div>
            </a>
          </div>
        </div>
        </div>
  </section>

  <!-- end shop section -->

  <!-- footer section -->
  <footer class="footer_section2">
    <div class="container">
      <div class="footer-info">
        <p>
          © <span id="displayYear">2022</span> All Rights Reserved By
          <a href="https://html.design/">Paint Art</a>
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