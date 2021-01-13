<?php

use app\models\Product;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
use app\models\Basket;
/**
 * @var \yii\data\ActiveDataProvider $dataProvider
 *
 */

/* @var $this yii\web\View */
/* @var $model app\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

   <div class="col-md-12">
       <div class="col-md-4">
           <?= $form->field($model, 'phone_number')->widget(MaskedInput::class, [
               'mask' => '(99)-999-99-99',
           ]) ?>
           <?= Html::submitButton(Yii::t('app', 'Activation code'), ['class' => 'btn btn-info']) ?>
       </div>
       <div class="col-md-4">
           <h2><?=Yii::t('app',"Are you sign up ?");?></h2>
           <?= Html::submitButton(Yii::t('app', 'Sign'), ['class' => 'btn btn-danger']) ?>
       </div>
       <div class="col-md-4">
           <h2><?=Yii::t('app',"Total sum:");?></h2>
          <h1 style="color: red">
              <?php
              echo Basket::pageTotal($dataProvider->models)." $";
              ?>
          </h1>

       </div>
   </div>


    <div class="col-md-8">
        <div class="col-md-6">
            <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'delivery_type')->textInput(['maxlength' => true]) ?>
        </div>

        <div class="col-md-6">
            <?= $form->field($model, 'city')->dropDownList(\app\models\TestSysRegion::city_list())?>
        </div>
        <div class="col-md-6">
            <?= $form->field($model, 'region')->dropDownList([\app\models\Tuman::region_list(4)]) ?>
        </div>

        <div class="col-md-8">
            <?= $form->field($model, 'street')->textInput(['maxlength' => true]) ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'home_number')->textInput(['maxlength' => true]) ?>
        </div>


        <div class="col-md-4">
            <?= $form->field($model, 'door')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'entrance')->textInput() ?>
        </div>
        <div class="col-md-4">
            <?= $form->field($model, 'floor')->textInput() ?>
        </div
        <div>
            <div class="col-md-6">
                <?= $form->field($model, 'delivery_method_id')->dropDownList(\app\models\DeliveryMethod::delivery_list()) ?>
            </div>
            <div class="col-md-6">
                <p>Yetkazib berish jarayonida qiyinchilik tug‘diruvchi holatlar
                    (masalan, katta hajmdagi buyurtmalarni lift nosoz holatda yuqori qavatlarga yetkazib berish)da
                    <a style="font-weight: bold">qo‘shimcha to‘lov</a> undiriladi.</p>
            </div>
        </div>
        <div class="col-md-12">
            <?=$form->field($model, 'payment_type')
                ->radioList(
                    [

                        0 => ' Click ',
                        1 =>' Apelsin ',
                        2=>' Milliy '

                    ],
                    [
                        'item' => function($index, $label, $name, $checked, $value) {

                            $return = '<label class="modal-radio">';
                            $return .= '<input type="radio" name="' . $name . '" value="' . $value . '" tabindex="3">';
                            $return .= '<i></i>';
                            $return .= '<span>' . ucwords($label) . '</span>';
                            $return .= '</label>';

                            return $return;
                        }
                    ]
                )
                ->label(false);
            ?>
        </div>
        <div class="col-md-12">
            <?= $form->field($model, 'order_describtion')->textarea(['rows' => 6]) ?>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
            </div>

        </div>



    </div>



    <?php ActiveForm::end(); ?>

</div>
