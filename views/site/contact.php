<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">


    <header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(../../web/images/shopping.jpg);">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="display-t">
                        <div class="display-tc animate-box" data-animate-effect="fadeIn">
                            <h1><?php echo  Yii::t('app','Contact Us');?></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div id="fh5co-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-push-1 animate-box">

                    <div class="fh5co-contact-info">
                        <h3><?php echo  Yii::t('app','Contact Information');?></h3>
                        <ul>
                            <li class="address"> <?php echo  Yii::t('app','56,Mirzaobod v. Chust city');?><br> <?php echo  Yii::t('app','Namangan region, Uzbekistan');?></li>
                            <li class="phone"><a href="tel://998993620127">+99 899 362 01 27</a></li>
                            <li class="email"><a href="mail.ru">mamadboev@mail.ru</a></li>
                            <li class="icon-paper-plane"><a href="https://t.me/Mamadboev">Sardor Mamadboev</a></li>

                        </ul>
                    </div>

                </div>
                <div class="col-md-6 animate-box">
                    <h3>Get In Touch</h3>
                        <?php $form = ActiveForm::begin([
                            'method' => 'post',
                            'action' => ['guest/create'],
                        ]); ?>
                        <div class="row form-group">

                            <div class="col-md-6">
                                <!-- <label for="fname">First Name</label> -->
<!--                                <input type="text" id="fname" class="form-control" placeholder="Your firstname">-->
                                <?php echo $form->field($model, 'firstname', [
                                    'inputOptions' => ['class' => 'form-control']
                                ])->textInput()->input('firstname', ['placeholder' => "Your firstname"])->label(false); ?>
                            </div>
                            <div class="col-md-6">
                                <!-- <label for="lname">Last Name</label> -->
<!--                                <input type="text" id="lname" class="form-control" placeholder="Your lastname">-->
                                <?php echo $form->field($model, 'lastname', [
                                    'inputOptions' => ['class' => 'form-control']
                                ])->textInput()->input('lastname', ['placeholder' => "Your lastname"])->label(false); ?>

                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="email">Email</label> -->
<!--                                <input type="text" id="email" class="form-control" placeholder="Your email address">-->
                                <?php echo $form->field($model, 'email', [
                                    'inputOptions' => ['class' => 'form-control','id'=>'email']
                                ])->textInput()->input('email', ['placeholder' => "Your Email adress"])->label(false); ?>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="subject">Subject</label> -->
<!--                                <input type="text" id="subject" class="form-control" placeholder="Your subject of this message">-->
                                <?php echo $form->field($model, 'subject', [
                                    'inputOptions' => ['class' => 'form-control']
                                ])->textInput()->input('subject', ['placeholder' => "Your subject of this message"])->label(false); ?>

                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-12">
                                <!-- <label for="message">Message</label> -->
<!--                                <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="Say something about us"></textarea>-->
                                <?= $form->field($model, 'sentence')->textarea(['class'=>'form-control','rows' => 10,'cols'=>30,'placeholder'=>'Say something about us'])->label(false)?>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-primary">
                        </div>
                        <?php ActiveForm::end(); ?>
                </div>
            </div>

        </div>
    </div>

    <div id="map" class="animate-box" data-animate-effect="fadeIn"></div>

</div>
