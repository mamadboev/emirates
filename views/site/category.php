<?php
use Yii;

$this->title = 'Category';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="site-product">
    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(images/shop.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1><?php echo Yii::t('app','Category');?></h1>
                            <h2><?php echo Yii::t('app','This created by: Sardor Mamadboyev')?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

  <?php
  echo \app\widgets\category\Categories::widget(
  )
  ?>
