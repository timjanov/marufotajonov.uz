<?php include 'inc/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Контакт | Welcome to the official Maruf Otajonov website</title>
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
                <h1>Контакт</h1>
              </div>  
            </div>
        </div>   
    </aside>

    <!-- Menu Button -->
    <a href="#" class="fm-button"><span></span>Menu</a>

    <!-- Menu Overlay -->
    <div class="fm-wrapper" id="fullscreen-menu">
        <div class="fm-wrapper-sub">
            <div class="fm-wrapper-sub-sub">
                  <ul class="fm-menu-links">
                      <li> <a href="index.php">Главная</a> </li>
                      <li> <a href="news.php">Новости</a> </li>
                      <li> <a href="works.php">Работы</a> </li>
                      <li> <a href="bio.php">Био</a> </li>
                      <li> <a href="photos.php">Фото</a> </li>
                      <li> <a href="contact.php" class="active">Контакт</a> </li>
                  </ul>
                  <!-- Social Links -->
                  <div class="fm-social-links">
                    <a href="<?php echo $config['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $config['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $config['in'];?>" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>

            </div>
        </div>
    </div>
    
    <!-- Contact form -->
    <section id="page-content">
      <div class="container">
        <div class="row">
          <div class="col-sm-8 col-sm-offset-2">
            <form method="GET" action="ob.php">
              <div class="row">
                  <div class="form-group col-sm-12">
                      <input type="text" name="name" class="form-control" placeholder="Имя" required>
                  </div>
                  <div class="form-group col-sm-12">
                      <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                  </div>
                  <div class="form-group col-sm-12">
                      <textarea name="message" class="form-control" placeholder="Собщения"></textarea>
                  </div>
                  <div class="form-group col-sm-12">
                      <button type="submit" class="btn btn-default">Отправить</button>
                  </div>
              </div>
            </form>
          </div><!-- /Contact form -->
        </div>
      </div>
    </section>

<?php include 'inc/footer.php'; ?>