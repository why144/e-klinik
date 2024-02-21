<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\PasienSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'nama_pasien') ?>

    <?= $form->field($model, 'no_hp') ?>

    <?= $form->field($model, 'tgl_lahir') ?>

    <?= $form->field($model, 'jenis_kelamin') ?>


    <?php // echo $form->field($model, 'keluhan') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
