<div class="wrapper">

    <section id="about">
        <div class="container">

            <div class="section-heading scrollpoint sp-effect3">
                <h1><?php echo $data["Hakkinda"]; ?></h1>
                <div class="divider"></div>
                <p><?php echo $data["HakkindaAciklama"]; ?></p>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6" >
                    <div class="about-item scrollpoint sp-effect5">
                        <i class="fa fa-map-marker fa-2x"></i>
                        <h3><?php echo $data["LokasyonBelirle"]; ?></h3>
                        <p><?php echo $data["lokasyonBelirleAciklama"]; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6" >
                    <div class="about-item scrollpoint sp-effect5">
                        <i class="fa fa-comments fa-2x"></i>
                        <h3><?php echo $data["BildirimleriAl"]; ?></h3>
                        <p><?php echo $data["BildirimleriAlAciklama"]; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6" >
                    <div class="about-item scrollpoint sp-effect1">
                        <i class="fa fa-star fa-2x"></i>
                        <h3><?php echo $data["FavoriMagaza"]; ?></h3>
                        <p><?php echo $data["FavoriMagazaAciklama"]; ?></p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="about-item scrollpoint sp-effect2">
                        <i class="fa fa-star-o fa-2x"></i>
                        <h3><?php echo $data["FavoriUrunler"]; ?></h3>
                        <p><?php echo $data["FavoriUrunlerAciklama"]; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="features">
        <div class="container">
            <div class="section-heading scrollpoint sp-effect3">
                <h1><?php echo $data["Ozellikler"]; ?></h1>
                <div class="divider"></div>
                <p><?php echo $data["OzelliklerAciklama"]; ?></p>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4 scrollpoint sp-effect1" style="padding-top: 50px">
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-map-marker fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["UrunKarsilastir"]; ?></h3>
                            <?php echo $data["UrunKarsilastirAciklama"]; ?>
                        </div>
                    </div>
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-question-circle fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["YakinMagaza"]; ?></h3>
                            <?php echo $data["YakinMagazaAciklama"]; ?>
                        </div>
                    </div>
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-search fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["OzelArama"]; ?></h3>
                            <?php echo $data["OzelAramaAciklama"]; ?>
                        </div>
                    </div>
                    <div class="media media-left feature">
                        <a class="pull-right" href="#">
                            <i class="fa fa-home fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["YerindeTakip"]; ?></h3>
                            <?php echo $data["YerindeTakipAciklama"]; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4" >
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/iphone-eco.png" class="img-responsive scrollpoint sp-effect5" alt="">
                </div>
                <div class="col-md-4 col-sm-4 scrollpoint sp-effect2" style="padding-top: 50px">
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-road fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["Degerlendirme"]; ?></h3>
                            <?php echo $data["DegerlendirmeAciklama"]; ?>
                        </div>
                    </div>
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-star-o fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["FavUrunler"]; ?></h3>
                             <?php echo $data["FavUrunlerAciklama"]; ?>
                        </div>
                    </div>
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-comments fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["BildirimAl"]; ?></h3>
                            <?php echo $data["BildirimAlAciklama"]; ?>
                        </div>
                    </div>
                    <div class="media feature">
                        <a class="pull-left" href="#">
                            <i class="fa fa-envelope fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <h3 class="media-heading"><?php echo $data["CevreDost"]; ?></h3>
                            <?php echo $data["CevreDostAciklama"]; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <!--<section id="reviews">
            <div class="container">
                <div class="section-heading inverse scrollpoint sp-effect3">
                    <h1>Reviews</h1>
                    <div class="divider"></div>
                    <p>Read What's The People Are Saying About Us</p>
                </div>
                <div class="row">
                    <div class="col-md-10 col-md-push-1 scrollpoint sp-effect3">
                        <div class="review-filtering">
                            <div class="review">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="http://api.randomuser.me/portraits/women/94.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“I love Oleose, I highly recommend it, Everyone Try It Now”</h3>
                                            <p>
                                                - Krin Fox
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review rollitin">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="http://api.randomuser.me/portraits/men/70.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“Oleaose Is The Best Stable, Fast App I Have Ever Experienced”</h3>
                                            <p>
                                                - Theodore Willis
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="review rollitin">
                                <div class="row">
                                    <div class="col-md-2">
                                        <div class="review-person">
                                            <img src="http://api.randomuser.me/portraits/men/93.jpg" alt="" class="img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-md-10">
                                        <div class="review-comment">
                                            <h3>“Keep It Up Guys Your Work Rules, Cheers :)”</h3>
                                            <p>
                                                - Ricky Grant
                                                <span>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star fa-lg"></i>
                                                    <i class="fa fa-star-half-o fa-lg"></i>
                                                    <i class="fa fa-star-o fa-lg"></i>
                                                </span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

    <section id="screens">
        <div class="container">

            <div class="section-heading scrollpoint sp-effect3">
                <h1><?php echo $data["EkranGoruntu"]; ?></h1>
                <div class="divider"></div>
            </div>

            <div class="filter scrollpoint sp-effect3">
                <a href="javascript:void(0)" class="button js-filter-all active"><?php echo $data["Hepsi"]; ?></a>
                <a href="javascript:void(0)" class="button js-filter-one"><?php echo $data["Mobil"]; ?></a>
                <a href="javascript:void(0)" class="button js-filter-two"><?php echo $data["Tablet"]; ?></a>
            </div>
            <div class="slider filtering scrollpoint sp-effect5" >
                <div class="one">
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/screens/profile.jpg" alt="">
                        <h4><?php echo $data["EkranGoruntusu1"]; ?></h4>
                </div>
                <div class="two">
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/screens/menu.jpg" alt="">
                        <h4><?php echo $data["EkranGoruntusu2"]; ?></h4>
                </div>
                <div class="three">
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/screens/weather.jpg" alt="">
                        <h4><?php echo $data["EkranGoruntusu3"]; ?></h4>
                </div>
                <div class="one">
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/screens/signup.jpg" alt="">
                        <h4><?php echo $data["EkranGoruntusu4"]; ?></h4>
                </div>
                <div class="one">
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/screens/calendar.jpg" alt="">
                        <h4><?php echo $data["EkranGoruntusu5"]; ?></h4>
                </div>
                <div class="two">
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/screens/options.jpg" alt="">
                        <h4><?php echo $data["EkranGoruntusu6"]; ?></h4>
                </div>
                <div class="three">
                    <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/screens/sales.jpg" alt="">
                        <h4><?php echo $data["EkranGoruntusu7"]; ?></h4>
                </div>
            </div>
        </div>
    </section>

    <section id="demo">
        <div class="container">
            <div class="section-heading scrollpoint sp-effect3">
                <h1><?php echo $data["Video"]; ?></h1>
                <div class="divider"></div>
                <p><?php echo $data["VideoAciklama"]; ?></p>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-2 scrollpoint sp-effect2">
                    <div class="video-container" >
                        <iframe src="http://player.vimeo.com/video/70984663"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="getApp">
        <div class="container-fluid">
            <div class="section-heading inverse scrollpoint sp-effect3">
                <h1><?php echo $data["Download"]; ?></h1>
                <div class="divider"></div>
                <p><?php echo $data["DownloadAciklama"]; ?></p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="hanging-phone scrollpoint sp-effect2 hidden-xs">
                        <img src="<?php echo SITE_USERFRONT_IMG ?>/eco/eco-angled2.png" alt="">
                    </div>
                    <div class="platforms">
                        <a href="#" class="btn btn-primary inverse scrollpoint sp-effect1">
                            <i class="fa fa-android fa-3x pull-left"></i>
                            <span><?php echo $data["DownloadAndroidÜst"]; ?></span><br>
                            <b><?php echo $data["DownloadAndroidAlt"]; ?></b>
                        </a>
                        <a href="#" class="btn btn-primary inverse scrollpoint sp-effect2">
                            <i class="fa fa-apple fa-3x pull-left"></i>
                            <span><?php echo $data["DownloadAppleÜst"]; ?></span><br>
                            <b><?php echo $data["DownloadAppleAlt"]; ?></b>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="support" class="doublediagonal">
        <div class="container">
            <div class="section-heading scrollpoint sp-effect3">
                <h1><?php echo $data["İletisim"]; ?></h1>
                <div class="divider"></div>
                <p><?php echo $data["İletisimAciklama"]; ?></p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-8 col-sm-8 scrollpoint sp-effect1">
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="<?php echo $data["AdSoyad"]; ?>">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="<?php echo $data["Email"]; ?>">
                                </div>
                                <div class="form-group">
                                    <textarea cols="30" rows="10" class="form-control" placeholder="<?php echo $data["Mesaj"]; ?>" style="resize:none"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm"><?php echo $data["Gonder"]; ?></button>
                            </form>
                        </div>
                        <div class="col-md-4 col-sm-4 contact-details scrollpoint sp-effect2">
                            <div class="media">
                                <a class="pull-left" href="#" >
                                    <i class="fa fa-map-marker fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $data["Adres"]; ?></h4>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#" >
                                    <i class="fa fa-envelope fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        <a href="mailto:support@oleose.com"><?php echo $data["MyEmail"]; ?></a>
                                    </h4>
                                </div>
                            </div>
                            <div class="media">
                                <a class="pull-left" href="#" >
                                    <i class="fa fa-phone fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $data["Telefon"]; ?></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>