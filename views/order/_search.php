<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\OrderSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'phone_number') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'delivery_type') ?>

    <?= $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'region') ?>

    <?php // echo $form->field($model, 'street') ?>

    <?php // echo $form->field($model, 'home_number') ?>

    <?php // echo $form->field($model, 'door') ?>

    <?php // echo $form->field($model, 'entrance') ?>

    <?php // echo $form->field($model, 'floor') ?>

    <?php // echo $form->field($model, 'delivery_method_id') ?>

    <?php // echo $form->field($model, 'payment_type') ?>

    <?php // echo $form->field($model, 'order_describtion') ?>

    <?php // echo $form->field($model, 'order_ip') ?>

    <?php // echo $form->field($model, 'product_id') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'total') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
