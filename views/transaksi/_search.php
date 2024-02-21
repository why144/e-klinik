<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\TransaksiSearch $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="transaksi-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id_transaksi') ?>

    <?= $form->field($model, 'id_pasien') ?>

    <?= $form->field($model, 'id_pegawai') ?>

    <?= $form->field($model, 'id_tindakan') ?>

    <?= $form->field($model, 'obat') ?>

    <?php // echo $form->field($model, 'jumlah_bayar') ?>

    <?php // echo $form->field($model, 'tgl_transaksi') ?>

    <?php // echo $form->field($model, 'status_pemabayaran') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
