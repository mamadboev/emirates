<div id="fh5co-product">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <span><?php echo Yii::t('app','Online Shopping')?></span>
                <h2><?php echo Yii::t('app','Category')?></h2>
                <p><?php echo  Yii::t('app',"You can find the products you need ")?></p>
            </div>
        </div>
        <div class="row">
            <?php foreach ($model as $item):?>
                <div class="col-md-4 text-center animate-box">
                    <div class="product">
                        <div class="product-grid" style="background-image:url(images/<?=$item->c_image;?>);">
                            <div class="inner">
                                <p>
                                    <a href="single.html" class="icon"><i class="icon-shopping-cart"></i></a>
                                    <a href="single.html" class="icon"><i class="icon-eye"></i></a>
                                </p>
                            </div>
                        </div>
                        <div class="desc">
                            <h3><a href="single.html"><?=$item->c_name_en;?></a></h3>
                            <span class="price">$<?=$item->c_min_price;?></span>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>

