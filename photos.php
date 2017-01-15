<?php include 'inc/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Фото | Maruf Otajonov | Welcome to the official Maruf Otajonov website</title>
    <!--meta-->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1c1d22">
    <meta name="msapplication-navbutton-color" content="#1c1d22">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!--css-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/main.css">
    <!--[if lt IE 9]>
       <script type="text/javascript" src="js/html5shiv.min.js"></script>
       <script type="text/javascript" src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <!--loader-->
    <div class="loader">
      <div class="spinner spinner-1"></div>
    </div>
    
    <!--banner-->
    <aside id="banner">
        <nav class="navbar navbar-default" role="navigation">
            <div class="mo-container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Maruf Otajonov</a>
                </div>
            </div>
        </nav>
        <div class="col-sm-8 col-sm-offset-2">
            <div class="display display-sec">
              <div class="into">
                <h1>Фотография</h1>
              </div>  
            </div>
        </div>   
    </aside>

    <!-- Menu Button -->
    <a href="#" class="fm-button"><span></span>Menu</a>
    <!-- End Menu Button -->

    <!-- Menu Overlay -->
    <div class="fm-wrapper" id="fullscreen-menu">
      <div class="fm-wrapper-sub">
          <div class="fm-wrapper-sub-sub">
                <ul class="fm-menu-links">
                    <li> <a href="index.php">Главная</a> </li>
                    <li> <a href="news.php">Новости</a> </li>
                    <li> <a href="works.php">Работы</a> </li>
                    <li> <a href="bio.php">Био</a> </li>
                    <li> <a href="photos.php" class="active">Фото</a> </li>
                    <li> <a href="contact.php">Контакт</a> </li>
                </ul>
                <!-- Social Links -->
                <div class="fm-social-links">
                    <a href="<?php echo $config['fb']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $config['tw']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $config['in']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
              <!-- End Social Links -->  
          </div>
      </div>
    </div>
    <!-- End Menu Overlay  -->

   <!--page content-->
   <section id="page-content">
        <div class="mo-container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center wrap-text">
                    <h1>Photos</h1>
                    <p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
                </div>
            </div>
            <div class="row">
                <h1 class="photos">Movie Name</h1>
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="img/img_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_5.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row ptop80">
                <h1 class="photos">Movie Name</h1>
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="img/img_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_5.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_6.jpg" alt="">
                    </div>
                </div>
            </div>
            <div class="row ptop80">
                <h1 class="photos">Movie Name</h1>
                <div class="owl-carousel owl-carousel-carousel">
                    <div class="item">
                        <img src="img/img_1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_4.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_5.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="img/img_6.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include 'inc/footer.php'; ?>