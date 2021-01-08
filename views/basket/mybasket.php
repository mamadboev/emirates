<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BasketSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$url= 'http://shop_test.loc/index.php?r=product%2Fview';
$this->title = Yii::t('app', 'My products');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="basket-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //'id',
           // 'user_ip',
                [
                    'attribute' => 'image',
                    'format' => 'html',
                    'value' => function ($model) {
                        return Html::img(Yii::getAlias('@web').'/images/'.\app\models\Product::findOne(['id'=>$model->product_id])->p_image,
                            ['width' => '70px']);
                    },
                ],

                [
                    'attribute'=>'name',
                    'label'  => Yii::t('app', 'Name'),
                     'value'  => static function ($model) {
                                return
                                    Html::a(
                                    Yii::t('app',  \app\models\Product::findOne(['id'=>$model->product_id])->p_name_en),
                                    [
                                        'product/view',
                                        'id'=>$model->product_id,

                                    ]
                                );
                            },
                            'format' => 'raw',
                ],
                [
                    'attribute'=>'count',
                    'label'  => Yii::t('app', 'Count'),
                    'value'=> static function($model){
                        return 1;

                    },
                    'format'=>'integer',
                ],

                [
                    'attribute'=>'price',
                    'label'  => Yii::t('app', 'Price'),
                    'value'=> static function($model){
                        return \app\models\Product::findOne(['id'=>$model->product_id])->price;

                    }
                ],




           // 'product_id',
           // 'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
