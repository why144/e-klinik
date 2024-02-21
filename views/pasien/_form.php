<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pasien-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pasien')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'no_hp')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Masukan Tanggal Lahir'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'dd-mm-yyyy'
    ] ]);; ?>


    <?= $form->field($model, 'jenis_kelamin')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'keluhan')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Back', 'index.php?r=pasien', ['class' => 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
