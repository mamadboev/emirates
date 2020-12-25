<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div id="fh5co-started">
    <div class="container">
        <?php $form = ActiveForm::begin([
                'method' => 'post',
                 'action' => ['subscribers/create'],
        ]); ?>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
                <h2><?php echo Yii::t('app','Newsletter')?></h2>
                <p><?php echo Yii::t('app','Just stay tune for our latest Product. Now you can subscribe')?></p>
            </div>
        </div>
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-inline">
                    <div class="col-md-6 col-sm-6">
                        <div class="form-group">
                            <label for="email" class="sr-only"><?php echo Yii::t('app','Email')?></label>
                            <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <button type="submit" class="btn btn-default btn-block">Subscribe</button>
                    </div>
                </form>
            </div>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>