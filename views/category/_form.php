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

    <?= $form->field($model, 'c_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'c_min_price')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
