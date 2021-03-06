<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.1.1
Version: 2.0.2
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="tr" class="no-js">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="UTF-8">
    <title><?php echo $data["Title"]; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="<?php echo SITE_USERFRONT_IMG; ?>/favicon.png">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="<?php echo SITE_USERFRONT_CSS; ?>/bootstrap.css">
                <link rel="stylesheet" href="<?php echo SITE_USERFRONT_CSS; ?>/animate.css">
                    <link rel="stylesheet" href="<?php echo SITE_USERFRONT_CSS; ?>/font-awesome.min.css">
                        <link rel="stylesheet" href="<?php echo SITE_USERFRONT_CSS; ?>/slick.css">
                            <link rel="stylesheet" href="<?php echo SITE_USERFRONT_JS; ?>/rs-plugin/css/settings.css">

                                <script type="text/javascript" src="<?php echo SITE_USERFRONT_JS; ?>/modernizr.custom.32033.js"></script>

                                <link rel="stylesheet" href="<?php echo SITE_USERFRONT_CSS; ?>/master.css">

                                    <!--[if lt IE 9]>
                                      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
                                      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
                                    <![endif]-->

                                    </head>

                                    <body>

                                    <div class="pre-loader">
                                        <div class="load-con">
                                            <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/logo.png" class="animated fadeInDown" alt="">
                                                <div class="spinner">
                                                    <div class="bounce1"></div>
                                                    <div class="bounce2"></div>
                                                    <div class="bounce3"></div>
                                                </div>
                                        </div>
                                    </div>

                                    <header>

                                        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
                                             
                                            <div class="container">
                                                 
                                                <select id="kullaniciLanguage" class="form-control" name="loginselected" required>                  
                                                                <option value="en" <?php echo Session::get('dil') == 'en' ? 'selected' : ''; ?>>English</option>
                                                                <option value="tr" <?php echo Session::get('dil') == 'tr' ? 'selected' : ''; ?>>Turkish</option>
                                                            </select>
                                                <!-- Brand and toggle get grouped for better mobile display -->
                                                <div class="navbar-header">
                                                    
                                                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                                        <span class="fa fa-bars fa-lg"></span>
                                                    </button>
                                                    <a class="navbar-brand" href="<?php echo SITE_URL_HOME; ?>">
                                                        <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/logo.png" alt="" class="logo">
                                                    </a>
                                                </div>

                                                <!-- Collect the nav links, forms, and other content for toggling -->
                                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                                                    <ul class="nav navbar-nav navbar-right">
                                                        <li>
                                                           
                                                        </li>
                                                        <li><a href="#about"><?php echo $data["Hakkinda"]; ?></a>
                                                        </li>
                                                        <li><a href="#features"><?php echo $data["OzelliklerUst"]; ?></a>
                                                        </li>
                                                        <!--<li><a href="#reviews">Yorumlar</a>
                                                        </li>-->
                                                        <li><a href="#screens"><?php echo $data["Ekranlar"]; ?></a>
                                                        </li>
                                                        <li><a href="#demo"><?php echo $data["Demo"]; ?></a>
                                                        </li>
                                                        <li><a href="#getApp"><?php echo $data["Indir"]; ?></a>
                                                        </li>
                                                        <li><a href="#support"><?php echo $data["Destek"]; ?></a>
                                                        </li>
                                                        <li><a href="<?php echo SITE_URL; ?>/loginform"><?php echo $data["GirisYap"]; ?></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <!-- /.navbar-collapse -->
                                            </div>
                                            <!-- /.container-->
                                        </nav>
                                        <!--RevSlider-->
                                        <div class="tp-banner-container">
                                            <div class="tp-banner" >
                                                <ul>
                                                    <!-- SLIDE  -->
                                                    <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
                                                        <!-- MAIN IMAGE -->
                                                        <img src="<?php echo SITE_USERFRONT_IMG ?>/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                                            <!-- LAYERS -->
                                                            <!-- LAYER NR. 1 -->
                                                            <div class="tp-caption lfl fadeout hidden-xs"
                                                                 data-x="left"
                                                                 data-y="bottom"
                                                                 data-hoffset="30"
                                                                 data-voffset="0"
                                                                 data-speed="500"
                                                                 data-start="700"
                                                                 data-easing="Power4.easeOut">
                                                                <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/Slides/hand-eco.png" alt="">
                                                            </div>

                                                                <div class="tp-caption lfl fadeout visible-xs"
                                                                 data-x="left"
                                                                 data-y="center"
                                                                 data-hoffset="700"
                                                                 data-voffset="0"
                                                                 data-speed="500"
                                                                 data-start="700"
                                                                 data-easing="Power4.easeOut">
                                                                <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/iphone-eco.png" alt="">
                                                            </div>

                                                            <div class="tp-caption large_white_bold sft" data-x="600" data-y="center" data-hoffset="0" data-voffset="-80" data-speed="500" data-start="1200" data-easing="Power4.easeOut">
                                                                <?php echo $data["IndrimliUrun"]; ?>
                                                            </div>
                                                            <div class="tp-caption large_white_light sfr" data-x="600" data-y="center" data-hoffset="0" data-voffset="0" data-speed="500" data-start="1400" data-easing="Power4.easeOut">
                                                                <?php echo $data["TakipEtme"]; ?>
                                                            </div>
                                                            <div class="tp-caption large_white_light sfb" data-x="600" data-y="center" data-hoffset="0" data-voffset="80" data-speed="1000" data-start="1500" data-easing="Power4.easeOut">
                                                                <?php echo $data["EnKolay"]; ?>
                                                            </div>

                                                            <div class="tp-caption sfb hidden-xs" data-x="650" data-y="center" data-hoffset="0" data-voffset="170" data-speed="1000" data-start="1700" data-easing="Power4.easeOut">
                                                                <a href="#about" class="btn btn-primary inverse btn-lg"><?php echo $data["Detaylar"]; ?></a>
                                                            </div>
                                                            <div class="tp-caption sfr hidden-xs" data-x="830" data-y="center" data-hoffset="0" data-voffset="170" data-speed="1500" data-start="1900" data-easing="Power4.easeOut">
                                                                <a href="#getApp" class="btn btn-default btn-lg"><?php echo $data["Indir"]; ?></a>
                                                            </div>

                                                    </li>
                                                    <!-- SLIDE 2 -->
                                                    <!--<li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                                                        <img src="img/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                                        <div class="tp-caption lfb fadeout hidden-xs"
                                                            data-x="center"
                                                            data-y="bottom"
                                                            data-hoffset="0"
                                                            data-voffset="0"
                                                            data-speed="1000"
                                                            data-start="700"
                                                            data-easing="Power4.easeOut">
                                                            <img src="img/eco/Slides/eco-slide2.png" alt="">
                                                        </div>
                                
                                                        
                                                        <div class="tp-caption large_white_light sft" data-x="center" data-y="250" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1400" data-easing="Power4.easeOut">
                                                            Every Pixel <i class="fa fa-heart"></i>
                                                        </div>
                                                        
                                                        
                                                    </li>-->

                                                    <!-- SLIDE 3 -->
                                                    <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                                                        <!-- MAIN IMAGE -->
                                                        <img src="<?php echo SITE_USERFRONT_IMG ?>/transparent.png"  alt="slidebg1"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                                                            <!-- LAYERS -->
                                                            <!-- LAYER NR. 1 -->
                                                            <div class="tp-caption customin customout hidden-xs"
                                                                 data-x="right"
                                                                 data-y="center"
                                                                 data-hoffset="0"
                                                                 data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                 data-voffset="50"
                                                                 data-speed="1000"
                                                                 data-start="700"
                                                                 data-easing="Power4.easeOut">
                                                                <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/Slides/family-eco.png" alt="">
                                                            </div>

                                                            <div class="tp-caption customin customout visible-xs"
                                                                 data-x="center"
                                                                 data-y="center"
                                                                 data-hoffset="0"
                                                                 data-customin="x:50;y:150;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.5;scaleY:0.5;skewX:0;skewY:0;opacity:0;transformPerspective:0;transformOrigin:50% 50%;"
                                                                 data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                                                                 data-voffset="0"
                                                                 data-speed="1000"
                                                                 data-start="700"
                                                                 data-easing="Power4.easeOut">
                                                                <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/Slides/family-eco.png" alt="">
                                                            </div>
                                                            <div class="tp-caption mediumlarge_light_white sfl hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="-50" data-speed="1000" data-start="1000" data-easing="Power4.easeOut">
                                                                <?php echo $data["TumPlatform"]; ?>
                                                            </div>
                                                            <div class="tp-caption mediumlarge_light_white sft hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="0" data-speed="1000" data-start="1200" data-easing="Power4.easeOut">
                                                                <?php echo $data["AktifKullanim"]; ?>
                                                            </div>
                                                            <div class="tp-caption small_light_white sfb hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="80" data-speed="1000" data-start="1600" data-easing="Power4.easeOut">
                                                                <p><?php echo $data["AktifKullanimAciklama"]; ?></p>
                                                            </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </header>
