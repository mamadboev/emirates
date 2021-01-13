<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'delivery_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'region')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'home_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'door')->textInput() ?>

    <?= $form->field($model, 'entrance')->textInput() ?>

    <?= $form->field($model, 'floor')->textInput() ?>

    <?= $form->field($model, 'delivery_method_id')->textInput() ?>

    <?= $form->field($model, 'payment_type')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_describtion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'order_ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'total')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
