<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pasien')->textInput() ?>

    <?= $form->field($model, 'id_pegawai')->textInput() ?>

    <?= $form->field($model, 'id_tindakan')->textInput() ?>

    <?= $form->field($model, 'obat')->textInput() ?>

    <?= $form->field($model, 'jumlah_bayar')->textInput() ?>


    <?= $form->field($model, 'status_pemabayaran')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Kembali', 'index.php?r=transaksi', ['class' => 'btn btn-success']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
