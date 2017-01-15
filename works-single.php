<?php include 'inc/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Работы | Maruf Otajonov | Welcome to the official Maruf Otajonov website</title>
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
                <h1>Работы</h1>
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
                    <li> <a href="works.php" class="active">Работы</a> </li>
                    <li> <a href="bio.php">Био</a> </li>
                    <li> <a href="photos.php">Фото</a> </li>
                    <li> <a href="contact.php">Контакт</a> </li>
                </ul>
                <!-- Social Links -->
                <div class="fm-social-links">
                    <a href="<?php echo $configp['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $configp['tw']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $configp['in']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
              <!-- End Social Links -->  
          </div>
      </div>
    </div>
    <!-- End Menu Overlay  -->

    <!--page-single content-->
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <img src="img/person_3.jpg" class="movie-img">
                </div>
                <div class="col-sm-8">
                    <h1 class="movie-name">Lorem ipsum dolor</h1>
                    <p class="movie-title">Duis aute irure dolor in reprehenderit in voluptate</p>
                    <p class="movie-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p class="movie-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitatio luptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <div class="row top100">
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