<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Category */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="category-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'c_name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_min_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
