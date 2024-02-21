<?php

use yii\helpers\Html;
use kartik\date\DatePicker;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;


/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="pegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_pegawai')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_kelamin')->widget(Select2::classname(), [
            'data' => ['L','P'],
            'options' => ['placeholder' => 'Pilih Jenis Kelamin'],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>
    <!-- <php $form->field($model, 'tanggal_lahir')->textInput() ?> -->
    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Masukan Tanggal Lahir'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'dd-mm-yyyy'
    ] ]);; ?>

    <?= $form->field($model, 'no_hp')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jabatan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_bergabung')->widget(DatePicker::classname(), [
    'options' => ['placeholder' => 'Masukan Tanggal Bergabung'],
    'pluginOptions' => [
        'autoclose' => true,
        'format' => 'dd-mm-yyyy'
    ] ]);; ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'gaji')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Kembali', 'index.php?r=pegawai', ['class' => 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
