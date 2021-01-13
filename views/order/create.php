<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 *
 */

$this->title = Yii::t('app', 'Ordering');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Orders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="order-create">

    <h1><?= Html::encode($this->title) ?></h1>
    <h2><?=Yii::t('app','Buyurtmalar ro`yhati');?></h2>
  <?php  echo "<div class='row'>";
        echo \yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'itemView'=>'orderproducts',
        'layout'=>"{items}\n{pager}",
        ]);
        echo "</div>"
  ?>
    <?= $this->render('_form', [
        'model' => $model,
        'dataProvider'=>$dataProvider,
    ]) ?>

</div>
