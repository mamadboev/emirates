<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'p_name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_image')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_describtion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
