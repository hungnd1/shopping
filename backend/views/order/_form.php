<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Order */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'name_buyer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_buyer')->textInput() ?>

    <?= $form->field($model, 'address_buyer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_buyer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email_receiver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name_receiver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone_receiver')->textInput() ?>

    <?= $form->field($model, 'address_receiver')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total')->textInput() ?>

    <?= $form->field($model, 'total_number')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'note')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
