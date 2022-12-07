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
<!-- saved from url=(0083)file:///C:/Users/dimas/OneDrive/Documents/dimas/login%20page/timups-html/index.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>.dismissButton{background-color:#fff;border:1px solid #dadce0;color:#1a73e8;border-radius:4px;font-family:Roboto,sans-serif;font-size:14px;height:36px;cursor:pointer;padding:0 24px}.dismissButton:hover{background-color:rgba(66,133,244,.04);border:1px solid #d2e3fc}.dismissButton:focus{background-color:rgba(66,133,244,.12);border:1px solid #d2e3fc;outline:0}.dismissButton:focus:not(:focus-visible){background-color:#fff;border:1px solid #dadce0;outline:none}.dismissButton:focus-visible{background-color:rgba(66,133,244,.12);border:1px solid #d2e3fc;outline:0}.dismissButton:hover:focus{background-color:rgba(66,133,244,.16);border:1px solid #d2e2fd}.dismissButton:hover:focus:not(:focus-visible){background-color:rgba(66,133,244,.04);border:1px solid #d2e3fc}.dismissButton:hover:focus-visible{background-color:rgba(66,133,244,.16);border:1px solid #d2e2fd}.dismissButton:active{background-color:rgba(66,133,244,.16);border:1px solid #d2e2fd;box-shadow:0 1px 2px 0 rgba(60,64,67,.3),0 1px 3px 1px rgba(60,64,67,.15)}.dismissButton:disabled{background-color:#fff;border:1px solid #f1f3f4;color:#3c4043}
</style><style>.ssQIHO-checkbox-menu-item>span>span{background-color:#000;display:inline-block}@media (forced-colors:active),(prefers-contrast:more){.ssQIHO-checkbox-menu-item>span>span{background-color:ButtonText}}
</style><style>.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}.gm-style .gm-style-mtc ul,.gm-style .gm-style-mtc li{box-sizing:border-box}
</style><style>.LGLeeN-keyboard-shortcuts-view{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex}.LGLeeN-keyboard-shortcuts-view table,.LGLeeN-keyboard-shortcuts-view tbody,.LGLeeN-keyboard-shortcuts-view td,.LGLeeN-keyboard-shortcuts-view tr{background:inherit;border:none;margin:0;padding:0}.LGLeeN-keyboard-shortcuts-view table{display:table}.LGLeeN-keyboard-shortcuts-view tr{display:table-row}.LGLeeN-keyboard-shortcuts-view td{-moz-box-sizing:border-box;box-sizing:border-box;display:table-cell;color:#000;padding:6px;vertical-align:middle;white-space:nowrap}.LGLeeN-keyboard-shortcuts-view td .VdnQmO-keyboard-shortcuts-view--shortcut-key{background-color:#e8eaed;border-radius:2px;border:none;-moz-box-sizing:border-box;box-sizing:border-box;color:inherit;display:inline-block;font-family:Google Sans Text,Roboto,Arial,sans-serif;line-height:16px;margin:0 2px;min-height:20px;min-width:20px;padding:2px 4px;position:relative;text-align:center}
</style><style>.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:focus>img:nth-child(1),.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1),.gm-control-active:disabled>img:nth-child(1){display:none}.gm-control-active:focus>img:nth-child(2),.gm-control-active:hover>img:nth-child(2){display:block}.gm-control-active:active>img:nth-child(3){display:block}.gm-control-active:disabled>img:nth-child(4){display:block}
</style><link type="text/css" rel="stylesheet" href="./index_files/css"><link type="text/css" rel="stylesheet" href="./index_files/css(1)"><style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}.gm-ui-hover-effect>span{background-color:#000}@media (forced-colors:active),(prefers-contrast:more){.gm-ui-hover-effect>span{background-color:ButtonText}}
</style><style>.gm-style .gm-style-cc a,.gm-style .gm-style-cc button,.gm-style .gm-style-cc span,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}.gm-style .gm-style-cc a,.gm-style .gm-style-cc button,.gm-style .gm-style-cc span{outline-offset:3px}
</style><style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style>.gm-style-moc{background-color:rgba(0,0,0,.45);pointer-events:none;text-align:center;transition:opacity ease-in-out}.gm-style-mot{color:white;font-family:Roboto,Arial,sans-serif;font-size:22px;margin:0;position:relative;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}
</style><style>.gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style>
  <!-- Basic -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="file:///C:/Users/dimas/OneDrive/Documents/dimas/Paint%20Art/index.html/images/favicon.png" type="image/x-icon">

  <title>Paint Art</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="./index_files/bootstrap.css">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="./index_files/owl.carousel.min.css">

  <!-- font awesome style -->
  <link href="./index_files/font-awesome.min.css" rel="stylesheet">

  
  <!-- responsive style -->
  <link href="./index_files/responsive.css" rel="stylesheet">
  <link href="about_files/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

<script type="text/javascript" charset="UTF-8" src="./index_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./index_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./index_files/map.js.download"></script><script type="text/javascript" charset="UTF-8" src="./index_files/onion.js.download"></script><script type="text/javascript" charset="UTF-8" src="./index_files/controls.js.download"></script><script type="text/javascript" charset="UTF-8" src="./index_files/marker.js.download"></script></head>

<body>


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

        <!-- slider section -->
        <section class="slider_section">
          <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div class="container-fluid ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h1>
                          Paint Art
                        </h1>
                        <p>
                          Tempat Lukisan-lukisan terbaik
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="img-box">
                        <img src="images/slider-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="container-fluid ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h1>
                          Jalan seniku
                        </h1>
                        <p>
                          Cari jiwa seni terpendam mu
                        </p>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="img-box">
                        <img src="images/slider2-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item ">
                <div class="container-fluid ">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="detail-box">
                        <h1>
                          "you are art"
                        </h1>
                        <p>
                          mrld - An Art Gallery Could Never Be As Unique As You
                        </p>
                        <div class="btn-box">
                          <a href="https://youtu.be/BjHJjjlubmE" class="btn1">
                            Want to hear it?
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="img-box">
                        <img src="images/slider3-img.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <ol class="carousel-indicators">
              <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
              <li data-target="#customCarousel1" data-slide-to="1"></li>
              <li data-target="#customCarousel1" data-slide-to="2"></li>
            </ol>
          </div>
    
        </section>
      </div>
      <!-- end slider section -->


    <!-- end header section -->
    <div class="section-kategori"> 
      <h1 class="fw-bold">Kategori</h1> 
      <div class="section-kategori-card"> 
          <a href="abstrak.php" class="href_link text-decoration-none"> 
              <div class="kategori-card"> 
                  <img src="images/a.png" alt=""> 
                  <p>Abstrak</p> 
              </div> 
          </a> 
          <a href="bunga.php" class="href_link text-decoration-none"> 
              <div class="kategori-card"> 
                  <img src="images/h.jpg" alt=""> 
                  <p>Bunga</p> 
              </div> 
          </a> 
          <a href="hewan.php" class="href_link text-decoration-none"> 
              <div class="kategori-card"> 
                  <img src="images/j.png" alt=""> 
                  <p>Hewan</p>  
              </div> 
          </a> 
      </div> 
      <div class="antara-kategori"> 
          <div class="section-kategori-card"> 
              <a href="manusia.php" class="href_link text-decoration-none"> 
                  <div class="kategori-card"> 
                      <img src="images/kategori 4.png" alt=""> 
                      <p>Manusia</p> 
                  </div> 
              </a> 
              <a href="realistis.php" class="href_link text-decoration-none"> 
                  <div class="kategori-card"> 
                      <img src="images/kategori 5.png" alt=""> 
                      <p>Realistis</p> 
                  </div> 
              </a> 
              <a href="alam.php" class="href_link text-decoration-none"> 
                  <div class="kategori-card"> 
                      <img src="images/kategori 6.png" alt=""> 
                      <p>Alam</p> 
                  </div> 
              </a> 
          </div> 
      </div> 
  </div>
  <!-- feature section -->

  <!-- produk unggulan-->
  
  <section class="shop_section layout_padding">
    <div class="container">
      <div class="row">
  <div class="col-md-6 ">
    <div class="box">
      <a href="produk.php">
        <div class="img-box">
          <img src="Produk/hewan/4.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            Migration
          </h6>
          <h6>
            <span>
              Rp 1.200.000
            </span>
          </h6>
        </div>
        <div class="new">
          <span>
            Unggulan
          </span>
        </div>
      </a>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="box">
      <a href="">
        <div class="img-box">
          <img src="Produk/realistis/4.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            Sentuhan jiwa
          </h6>
          <h6>
            <span>
             Rp 350.000
            </span>
          </h6>
        </div>
        <div class="new">
          <span>
            Baru
          </span>
        </div>
      </a>
    </div>
  </div>
  
  <div class="col-sm-6 col-xl-3">
    <div class="box">
      <a href="">
        <div class="img-box">
          <img src="Produk/alam/7.png" alt="">
        </div>
        <div class="detail-box">
          <h6>
            The beacth
          </h6>
          <h6>
            <span>
             Rp 500.000
            </span>
          </h6>
        </div>
        <div class="new">
          <span>
            Baru
          </span>
        </div>
      </a>
    </div>
  </div>
  </div>
    </div>
  </section>
<!--produk unggulan-->

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
  <script src="./index_files/jquery-3.4.1.min.js.download"></script>
  <!-- popper js -->
  <script src="./index_files/popper.min.js.download" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="./index_files/bootstrap.js.download"></script>
  <!-- owl slider -->
  <script src="./index_files/owl.carousel.min.js.download">
  </script>
  <!-- custom js -->


</body></html>