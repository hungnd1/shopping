<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div id="contact-page" class="container">
    <div class="bg">
<!--        <div class="row">-->
<!--            <div class="col-sm-12">-->
<!--                <h2 class="title text-center">Liên hệ<strong></strong></h2>-->
<!--                <div id="gmap" class="contact-map">-->
<!--                    -->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <div class="row">
            <div class="col-sm-8">
                <div class="contact-form">
                    <h2 class="title text-center">Gửi ý kiến</h2>
                    <div class="status alert alert-success" style="display: none"></div>
                    <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <div class="form-group col-md-6">
                            <?= $form->field($model, 'name')->textInput(['autofocus' => true])->label('Họ và tên') ?>
                        </div>
                        <div class="form-group col-md-6">
                            <?= $form->field($model, 'email')->label('Email') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?= $form->field($model, 'subject')->label('Tiêu đề') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Nội dung') ?>
                        </div>
                        <div class="form-group col-md-12">
                            <?= Html::submitButton('Gửi', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                        </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="contact-info">
                    <h2 class="title text-center">Thông tin liên hệ</h2>
                    <address>
                        <p>E-Shopping.</p>
                        <p>124 Hoàng Quốc Việt, Hà Nội</p>
                        <p>Việt Nam</p>
                        <p>Mobile: 01688 929 947</p>
                        <p>Email: shopping@gmail.com</p>
                    </address>
                    <div class="social-networks">
                        <h2 class="title text-center">Kết nối với chúng tôi</h2>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-youtube"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!--/#contact-page-->
