<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Product */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="product-form">

    <?php $form = ActiveForm::begin(['options'=>['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'brand_id')->textInput() ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'price')->textInput() ?>

    <?= $form->field($model, 'Ram')->textInput() ?>

    <?= $form->field($model, 'Rom')->textInput() ?>

    <?= $form->field($model, 'CPU')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Pin')->textInput() ?>

    <?= $form->field($model, 'SIM')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'best_seller')->textInput() ?>

    <?= $form->field($model, 'os')->textInput() ?>

    <?= $form->field($model, 'display')->textInput() ?>

    <?= $form->field($model, 'camera_truoc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'camera_sau')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'image')->fileInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
