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
<!-- saved from url=(0083)file:///C:/Users/dimas/OneDrive/Documents/dimas/login%20page/timups-html/about.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><style>.LGLeeN-keyboard-shortcuts-view{display:-webkit-box;display:-webkit-flex;display:-moz-box;display:-ms-flexbox;display:flex}.LGLeeN-keyboard-shortcuts-view table,.LGLeeN-keyboard-shortcuts-view tbody,.LGLeeN-keyboard-shortcuts-view td,.LGLeeN-keyboard-shortcuts-view tr{background:inherit;border:none;margin:0;padding:0}.LGLeeN-keyboard-shortcuts-view table{display:table}.LGLeeN-keyboard-shortcuts-view tr{display:table-row}.LGLeeN-keyboard-shortcuts-view td{-moz-box-sizing:border-box;box-sizing:border-box;display:table-cell;color:#000;padding:6px;vertical-align:middle;white-space:nowrap}.LGLeeN-keyboard-shortcuts-view td .VdnQmO-keyboard-shortcuts-view--shortcut-key{background-color:#e8eaed;border-radius:2px;border:none;-moz-box-sizing:border-box;box-sizing:border-box;color:inherit;display:inline-block;font-family:Google Sans Text,Roboto,Arial,sans-serif;line-height:16px;margin:0 2px;min-height:20px;min-width:20px;padding:2px 4px;position:relative;text-align:center}
</style><style>.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:focus>img:nth-child(1),.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1),.gm-control-active:disabled>img:nth-child(1){display:none}.gm-control-active:focus>img:nth-child(2),.gm-control-active:hover>img:nth-child(2){display:block}.gm-control-active:active>img:nth-child(3){display:block}.gm-control-active:disabled>img:nth-child(4){display:block}
</style><link type="text/css" rel="stylesheet" href="./about_files/css"><link type="text/css" rel="stylesheet" href="./about_files/css(1)"><style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}.gm-ui-hover-effect>span{background-color:#000}@media (forced-colors:active),(prefers-contrast:more){.gm-ui-hover-effect>span{background-color:ButtonText}}
</style><style>.gm-style .gm-style-cc a,.gm-style .gm-style-cc button,.gm-style .gm-style-cc span,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}.gm-style .gm-style-cc a,.gm-style .gm-style-cc button,.gm-style .gm-style-cc span{outline-offset:3px}
</style><style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style>.dismissButton{background-color:#fff;border:1px solid #dadce0;color:#1a73e8;border-radius:4px;font-family:Roboto,sans-serif;font-size:14px;height:36px;cursor:pointer;padding:0 24px}.dismissButton:hover{background-color:rgba(66,133,244,.04);border:1px solid #d2e3fc}.dismissButton:focus{background-color:rgba(66,133,244,.12);border:1px solid #d2e3fc;outline:0}.dismissButton:focus:not(:focus-visible){background-color:#fff;border:1px solid #dadce0;outline:none}.dismissButton:focus-visible{background-color:rgba(66,133,244,.12);border:1px solid #d2e3fc;outline:0}.dismissButton:hover:focus{background-color:rgba(66,133,244,.16);border:1px solid #d2e2fd}.dismissButton:hover:focus:not(:focus-visible){background-color:rgba(66,133,244,.04);border:1px solid #d2e3fc}.dismissButton:hover:focus-visible{background-color:rgba(66,133,244,.16);border:1px solid #d2e2fd}.dismissButton:active{background-color:rgba(66,133,244,.16);border:1px solid #d2e2fd;box-shadow:0 1px 2px 0 rgba(60,64,67,.3),0 1px 3px 1px rgba(60,64,67,.15)}.dismissButton:disabled{background-color:#fff;border:1px solid #f1f3f4;color:#3c4043}
</style><style>.gm-style-moc{background-color:rgba(0,0,0,.45);pointer-events:none;text-align:center;transition:opacity ease-in-out}.gm-style-mot{color:white;font-family:Roboto,Arial,sans-serif;font-size:22px;margin:0;position:relative;top:50%;transform:translateY(-50%);-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%)}
</style><style>.gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style>
  <!-- Basic -->
  
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Site Metas -->
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">

  <title>Paint Art</title>


  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="./about_files/bootstrap.css">
  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="./about_files/owl.carousel.min.css">
  <link rel="stylesheet" href="uy.css">

  <!-- font awesome style -->
  <link href="./about_files/font-awesome.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="./about_files/style.css" rel="stylesheet">
  <!-- responsive style -->
  <link href="./about_files/responsive.css" rel="stylesheet">

<script type="text/javascript" charset="UTF-8" src="./about_files/common.js.download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/util.js.download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/map.js.download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/onion.js.download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/controls.js.download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/common.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/util.js(1).download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/common.js(2).download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/util.js(2).download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/common.js(3).download"></script><script type="text/javascript" charset="UTF-8" src="./about_files/util.js(3).download"></script></head>

<body class="sub_page">
 
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
    
     <!-- about section -->

     <section class="about_section">
      <div class="container  ">
        <div class="row">
          <div class="about-img">
            <div class="img-box">
              <img src="./images/about-img.png" alt="">
            </div>
          </div>
          <div class="col-md-6 col-lg-7">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  Tentang kami
                </h2>
              </div>
              <p>
                Kami memulai bisnis jual beli lukisan "Paint Art" pada tahun 2022, dengan motivasi untuk memperkenalkan
                seni lukis kepada masyarakat untuk lebih mencintai karya seni lukis. Terutama lukisan-lukisan anak bangsa
                yang masih tidak terlalu di sorot oleh masyarakat. tidak hanya keindahnya, melainkan makna lukisan 
                yang terkandung di setiap lukisannya hingga bahkan menarik perhatian seniman-seniman ternama hingga membuat 
                karya anak bangsa menjadi mendunia.
              </p>
              <div class="tbl-about">
                <table>
                <tr>
                  <td>Alamat</td>
                  <td>:</td>
                  <td>Bandulan Raya</td>
                </tr>
                <tr>
                  <td>twitter</td>
                  <td>:</td>
                  <td>Paint_Art.official</td>
                </tr>
                <tr>
                  <td>instagram</td>
                  <td>:</td>
                  <td>Paint.Art_official</td>
                </tr>
                <tr>
                  <td>Nomor Hp</td>
                  <td>:</td>
                  <td>0880080880</td>
                </tr>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <!-- end about section -->

  <!-- footer section -->
  <footer class="footer_section">
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
  <script src="./about_files/jquery-3.4.1.min.js.download"></script>
  <!-- popper js -->
  <script src="./about_files/popper.min.js.download" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- bootstrap js -->
  <script src="./about_files/bootstrap.js.download"></script>
  <!-- owl slider -->
  <script src="./about_files/owl.carousel.min.js.download">
  </script>
  <!-- custom js -->
  <script src="./about_files/custom.js.download"></script>
  <!-- Google Map -->
  <script src="./about_files/js"></script>
  <!-- End Google Map -->



</body></html>