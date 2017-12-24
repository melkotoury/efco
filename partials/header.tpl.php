
<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description" content="ConstructPro - Building Company HTML5 Responsive Template">
    <meta name="keywords" content="building company, construction, construction company, constructor, contractor, corporate, engineering, handyman, industry, painter, real estate, architecture, builder, company">
    <meta name="author" content="Root Cave">
    <!-- Title -->
    <title>Efco - Construction Company </title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="<?= IMG_DIR;  ?>favicon.png">

    <!-- Apple Touch Icons -->
    <link rel="apple-touch-icon" href="<?= IMG_DIR;  ?>apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="<?= IMG_DIR;  ?>apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= IMG_DIR;  ?>apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= IMG_DIR;  ?>apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= IMG_DIR;  ?>apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= IMG_DIR;  ?>apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= IMG_DIR;  ?>apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= IMG_DIR;  ?>apple-touch-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= IMG_DIR;  ?>apple-touch-icon-180x180.png">

    <!-- Stylesheets Start -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600|Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="<?=  CSS_DIR;  ?>bootstrap.min.css">
<!--    <link rel="stylesheet" href="//cdn.rawgit.com/morteza/bootstrap-rtl/v3.3.4/dist/css/bootstrap-rtl.min.css">-->
    <link rel="stylesheet" href="<?=  CSS_DIR;  ?>font-awesome.min.css">
    <link rel="stylesheet" href="<?=  CSS_DIR;  ?>owl.carousel.min.css">
    <link rel="stylesheet" href="<?=  CSS_DIR;  ?>magnific-popup.css">
    <link rel="stylesheet" href="<?=  CSS_DIR;  ?>animate.css">
    <link rel="stylesheet" href="<?=  CSS_DIR; ?>/main.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="<?=  CSS_DIR;  ?>meanmenu.min.css">
    <link rel="stylesheet" href="<?=  CSS_DIR;  ?>responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/0.8.2/css/flag-icon.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
    <script src="<?= JS_DIR;  ?>jquery-2.2.4.min.js"></script>
    <script src="<?= JS_DIR;  ?>bootstrap.min.js"></script>
    <script src="<?= JS_DIR;  ?>imagesloaded.pkgd.min.js"></script>
    <script src="<?= JS_DIR;  ?>isotope.pkgd.min.js"></script>
    <script src="<?= JS_DIR;  ?>owl.carousel.min.js"></script>
    <script src="<?= JS_DIR;  ?>owl.animate.js"></script>
    <script src="<?= JS_DIR;  ?>jquery.scrollUp.min.js"></script>
    <script src="<?= JS_DIR;  ?>jquery.counterup.min.js"></script>
    <script src="<?= JS_DIR;  ?>modernizr.min.js"></script>
    <script src="<?= JS_DIR;  ?>jquery.magnific-popup.min.js"></script>
    <script src="<?= JS_DIR;  ?>wow.min.js"></script>
    <script src="<?= JS_DIR;  ?>waypoints.min.js"></script>
    <script src="<?= JS_DIR;  ?>jquery.meanmenu.min.js"></script>
    <script src="<?= JS_DIR;  ?>jquery.sticky.js"></script>
    <script src="<?= JS_DIR;  ?>custom.js"></script>


</head>




<body>
    <!-- Preloader Start -->
    <div id="preloader">
        <div id="preloader-status"></div>
    </div>
    <!-- Preloader End -->
    <!-- Header Start -->
    <header>
        <!-- Header Top Start -->
        <div class="hd-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <div class="hd-lft">
                            <ul>
                                <li><i class="fa fa-comment-o"></i> 24x7 live Support</li>
                                <li><i class="fa fa-phone"></i>(888) 010203-4567</li>
                                <li>
                                    <?php
                                    if ($_SESSION['lang'] == 'en'){


                                        ?>
                                        <a href="?lang=ar">
                                        <span class="flag-icon flag-icon-eg"> </span>  <span class="lang"> العربية</span>
                                        </a>

                                        <?php

                                    }
                                      else {

                                          ?>
                                          <a href="?lang=en">
                                          <span class="flag-icon flag-icon-us"> </span>  <span class="lang">English</span>
                                          </a>
                                          <?php

                                      }
                                    ?>

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="hd-rgt">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Top End -->
        
      
