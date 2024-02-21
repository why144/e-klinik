<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="obat-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jenis_obat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stok')->textInput() ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Kembali', 'index.php?r=obat', ['class' => 'btn btn-primary']) ?>

    </div>

    <?php ActiveForm::end(); ?>

</div>
