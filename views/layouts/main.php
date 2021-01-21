<?php


/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\widgets\ActiveForm;

AppAsset::register($this);
$basePath = Yii::$app->getBasePath();
?>
<?php $this->beginPage()

?>
<?php global $site;
    $site="http://shop_test.loc/index.php?r=site%2F";
    $basket="http://shop_test.loc/index.php?r=basket%2F";
?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Shop &mdash; Free Website Template, Free HTML5 Template by gettemplates.co</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Free HTML5 Website Template by gettemplates.co" />
        <meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
        <meta name="author" content="gettemplates.co" />
    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />
    <!-- Animate.css -->
    <link rel="stylesheet" href="../../web/css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="../../web/css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="../../web/css/bootstrap.css">

    <!-- Flexslider  -->
    <link rel="stylesheet" href="../../web/css/flexslider.css">

    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="../../web/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../web/css/owl.theme.default.min.css">

    <!-- Theme style  -->
    <link rel="stylesheet" href="../../web/css/style.css">

    <!-- Modernizr JS -->
    <script src="../../web/js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->

    <?php $this->head() ?>
</head>
<body class="page1" id="top">
<?php $this->beginBody() ?>
<div class="fh5co-loader"></div>
<!--header-->
<div id="page">
    <nav class="fh5co-nav" role="navigation">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-xs-2">
                    <div id="fh5co-logo"><a href="/site/index"><?php echo  Yii::t('app','Shop.');?></a></div>
                </div>
                <div class="col-md-6 col-xs-6 text-center menu-1">
                    <ul>
                        <li class="has-dropdown">
                            <a href="/site/category"><?php echo  Yii::t('app','Category');?></a>
                            <ul class="dropdown">
                                <li><a href="site/single"><?php echo  Yii::t('app','Single Shop');?></a></li>
                            </ul>
                        </li>
                        <li><a href="/site/about"><?php echo  Yii::t('app','About');?></a></li>
                        <li class="has-dropdown">
                            <a href="/site/services"><?php echo  Yii::t('app','Services');?></a>
                            <ul class="dropdown">
                                <li><a href="#"><?php echo  Yii::t('app','Web Design');?></a></li>
                                <li><a href="#"><?php echo  Yii::t('app','eCommerce.');?></a></li>
                                <li><a href="#"><?php echo  Yii::t('app','Branding.');?></a></li>
                                <li><a href="#"><?php echo  Yii::t('app','API.');?></a></li>
                            </ul>
                        </li>
                        <li><a href="/site/contact"><?php echo  Yii::t('app','Contact');?></a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-xs-4 text-right hidden-xs menu-2">
                    <ul>
                        <form method="get" action="search">
                            <li class="search">
                                <div class="input-group">
                                    <input type="text" name="search" placeholder="Search...">
                                    <span class="input-group-btn">
						             <input type="submit" value="OK">
						            </span>
                                </div>
                            </li>

                        </form>

                        <li class="shopping-cart"><a href="/basket/mybasket?user_ip=<?=Yii::$app->request->getUserIP();?>" class="cart"><span><small><?php echo \app\models\Basket::find()->where(['status'=>1,'user_ip'=>Yii::$app->request->getUserIP()])->count();?></small><i class="icon-shopping-cart"></i></span></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!--Dollar Rubl Evro kurslari-->
        <div class="container">

            </div>
    <!--Kurs ko'rinishoi yakuni-->
        <div class="container">
            <?= Alert::widget() ?>
            <?= $content ?>
        </div>
<?php echo \app\widgets\newsletter\Newsletters::widget();?>

    <footer id="fh5co-footer" role="contentinfo">
        <div class="container">
            <div class="row row-pb-md">
                <div class="col-md-4 fh5co-widget">
                    <h3><?php echo Yii::t('app','Shop.');?></h3>
                    <p><?php echo Yii::t('app','An online store is a test-based web application that performs convenience');?></p>
                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="/site/about"><?php echo  Yii::t('app','About');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Help');?></a></li>
                        <li><a href="/site/contact"><?php echo  Yii::t('app','Contact');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Terms');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Meetups');?></a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#"><?php echo  Yii::t('app','Shop');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Privacy');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Testimonials');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Handbook');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Held Desk');?>Held Desk</a></li>
                    </ul>
                </div>

                <div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
                    <ul class="fh5co-footer-links">
                        <li><a href="#"><?php echo  Yii::t('app','Find Designers');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Find Developers');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Teams');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','Advertise');?></a></li>
                        <li><a href="#"><?php echo  Yii::t('app','API');?></a></li>
                    </ul>
                </div>
            </div>

            <div class="row copyright">
                <div class="col-md-12 text-center">
                    <p>
                        <small class="block">&copy; <?php echo Yii::t('app','2020 year created')?> </small>
                        <small class="block"><?php echo Yii::t('app','Designed and Created by  Mamadboev Sardor');?></a></small>
                    </p>
                    <p>
                    <ul class="fh5co-social-icons">
                        <li><a href=""><i class="icon-twitter"></i></a></li>
                        <li><a href="https://www.facebook.com/sardor.mamadboyev.1"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="https://t.me/Mamadboev"><i class="icon-paper-plane"></i></a></li>
                    </ul>
                    </p>
                </div>
            </div>

        </div>
    </footer>
    </div>

    <div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
    </div>

       
<?php $this->endBody() ?>

<!-- jQuery -->
<script src="../../web/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="../../web/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="../../web/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="../../web/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="../../web/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="../../web/js/jquery.countTo.js"></script>
<!-- Flexslider -->
<script src="../../web/js/jquery.flexslider-min.js"></script>
<!-- Main -->
<script src="../../web/js/main.js"></script>
        
</body>
</html>
<?php $this->endPage() ?>
