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
                    <a href="<?php echo $configp['fb']; ?>" target="_blank"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $configp['tw']; ?>" target="_blank"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $configp['in']; ?>" target="_blank"><i class="fa fa-instagram"></i></a>
                </div>
              <!-- End Social Links -->  
          </div>
      </div>
    </div>
    <!-- End Menu Overlay  -->

    <!--page content-->
    <div id="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>We Create Awesome Free Templates</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>Handcrafted Using CSS3 &amp; HTML5</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>We Try To Update The Site Everyday</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>We Create Awesome Free Templates</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>Handcrafted Using CSS3 &amp; HTML5</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>We Try To Update The Site Everyday</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
            </div><!--row-->
            <div class="row">
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>We Create Awesome Free Templates</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>Handcrafted Using CSS3 &amp; HTML5</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a class="work" href="works-single.html">
                        <figure>
                        <img src="img/person_3.jpg" alt="" class="img-responsive">
                        </figure>
                        <div class="work-copy">
                            <h3>We Try To Update The Site Everyday</h3>
                            <span class="work-date">June 8, 2016</span>
                            <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
                        </div>
                    </a>
                </div>
            </div><!--row-->
        </div>
    </div>

<?php include 'inc/footer.php'; ?>