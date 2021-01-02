<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Orderitem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderitem-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'buyer_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buyer_address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'buyer_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'product_id')->textInput() ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'buy_date')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
