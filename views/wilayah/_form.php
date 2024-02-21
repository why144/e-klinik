<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Wilayah $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="wilayah-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_wilayah')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
