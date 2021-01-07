<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/shopping.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1><?php echo Yii::t('app','About Us')?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-about">
        <div class="container">
            <div class="about-content">
                <div class="row animate-box">
                    <div class="col-md-6">
                        <div class="desc">
                            <h3><?php echo Yii::t('app','Why this online shopping')?></h3>
                           <p>
                               <?php echo Yii::t('app',
                                   'Today, online shopping plays an important role in our daily lives.
                                  We can buy whatever we want where we stand.
                                  This will help us save our time and spend our time on what we need
                   ')?>
                           </p>
                        </div>
                        <div class="desc">
                            <h3><?php echo Yii::t('app','Purpose && Mission')?></h3>
                            <p><?php echo Yii::t('app','My goal is to put into practice the knowledge I have learned based on this template')?></p>
                            <p><?php echo Yii::t('app','Objective: To learn new knowledge by performing online shopping tasks')?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <img class="img-responsive" src="images/shopping_about1.jpg" alt="about">
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                    <span><?echo Yii::t('app','Productive Staff')?></span>
                    <h2><?php echo Yii::t('app','Meet Our Team');?></h2>
                    <p><?php echo Yii::t('app','Our team not many people. Our team is I am  :))')?></p>
                </div>
                <?php echo \app\widgets\team\TeamPeople::widget();?>

            </div>
        </div>
    </div>
