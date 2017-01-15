<?php include 'inc/config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Maruf Otajonov | Welcome to the official Maruf Otajonov website</title>
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

    <!--header-->
    <header role="banner">
        <div class="overlay"></div>
        <nav class="navbar navbar-default" role="navigation">
            <div class="mo-container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">Maruf Otajonov</a>
                </div>
            </div>
        </nav>
        <div class="col-sm-8 col-sm-offset-2">
            <div class="display display-main">
              <div class="into">
                <h1>Ма'руф Отажонов</h1>
                <p>Актер и Режиссер</p>
              </div>  
            </div>
        </div>   
    </header>

    <!-- Menu Button -->
    <a href="#" class="fm-button"><span></span>Menu</a>
    <!-- End Menu Button -->
    
    <!-- Menu Overlay -->
    <div class="fm-wrapper" id="fullscreen-menu">
        <div class="fm-wrapper-sub">
            <div class="fm-wrapper-sub-sub">
                <ul class="fm-menu-links">
                    <li> <a href="index.php" class="active">Главная</a> </li>
                    <li> <a href="news.php">Новости</a> </li>
                    <li> <a href="works.php">Работы</a> </li>
                    <li> <a href="bio.php">Био</a> </li>
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
    
    <!--js-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
</body>
</html>