<?php include 'inc/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Био | Maruf Otajonov | Welcome to the official Maruf Otajonov website</title>
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
                <h1>Биография</h1>
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
                  <li> <a href="bio.php" class="active">Био</a> </li>
                  <li> <a href="photos.php">Фото</a> </li>
                  <li> <a href="contact.php">Контакт</a> </li>
              </ul>
              <!-- Social Links -->
              <div class="fm-social-links">
                  <a href="<?php echo $config['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
                  <a href="<?php echo $config['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
                  <a href="<?php echo $config['in'];?>" target="_blank"><i class="fa fa-instagram"></i></a>
              </div>
              <!-- End Social Links -->  
          </div>
      </div>
    </div>
    <!-- End Menu Overlay  -->
    
     <!--page content-->
    <section id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 text-center">
                    <img src="img/person_3.jpg" class="bio-img">
                    <h1 class="bio-title">Maruf Otajonov</h1>
                </div>
                 <div class="col-sm-10 col-sm-offset-1 text-left">
                    <p class="bio-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>    
        </div>
    </section>

<?php include 'inc/footer.php'; ?>