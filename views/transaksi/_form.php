<?php

use yii\helpers\Html;
use kartik\select2\Select2;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->widget(Select2::classname(), [
            'data' => $namaPasien,
            'options' => ['placeholder' => 'Pilih Nama Pasien'],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Nama Pasien'); 
        ?>
    <?= $form->field($model, 'id_pegawai')->widget(Select2::classname(), [
            'data' => $namaPegawai,
            'options' => ['placeholder' => 'Pilih Nama Pegawai'],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true
            ],
        ])->label('Nama Pegawai'); 
        ?>

    <?= $form->field($model, 'jenis_transaksi')->widget(Select2::classname(), [
            'data' => ['Beli Obat','Konsultasi', 'Konsultasi + Beli Obat'],
            'options' => ['placeholder' => 'Pilih Jenis Transaksi'],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>

    <?= $form->field($model, 'id_tindakan')->textInput()->label('Tindakan') ?>

    <?= $form->field($model, 'obat')->textInput() ?>

    <?= $form->field($model, 'jumlah_bayar')->textInput() ?>


    <?= $form->field($model, 'status_pembayaran')->widget(Select2::classname(), [
            'data' => ['Lunas', 'Belum Lunas'],
            'options' => ['placeholder' => 'Pilih Status Pembayaran'],
            'hideSearch' => true,
            'pluginOptions' => [
                'allowClear' => true
            ],
        ]); ?>


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Kembali', 'index.php?r=transaksi', ['class' => 'btn btn-success']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
