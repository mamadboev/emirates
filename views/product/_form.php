<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Category;

/* @var $this yii\web\View */
/* @var $model app\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(Category::category_list()) ?>

    <?= $form->field($model, 'p_name_uz')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_name_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_name_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_image')->fileInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'p_describtion')->textarea(['rows' => 6]) ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
