<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Product view';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
    <div id="fh5co-about">
        <div class="container">
            <div class="about-content">
                <div class="row animate-box">
                    <div class="col-md-6">
                        <img class="img-responsive" src="../web/images/<?=$model->p_image;?>" alt="about">
                    </div>
                    <div class="col-md-6" >
                        <h4>
                            <a href="site/products?id=<?=$model->category_id;?>"><?=\app\models\Category::findOne(['id'=>$model->category_id])->c_name_en;?></a>
                        </h4>
                        <h1>
                            <?=$model->p_name_en;?>
                        </h1>
                        <h3 style="font-weight: bold">
                           <?=Yii::t('app',' Describtion')?> <br>
                        </h3>
                        <?=$model->p_describtion;?>
                        <h1 style="font-weight: bold">
                            <?=number_format($model->price,2)."$" ;?>
                        </h1>
                        <p><a href="site/purchase?id=<?=$model->id;?>&category=<?=$model->category_id;?>" class="btn btn-primary btn-outline btn-lg">Purchase Now</a></p>


                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
