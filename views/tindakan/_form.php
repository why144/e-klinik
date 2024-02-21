<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="tindakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_tindakan')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'biaya')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Simpan', ['class' => 'btn btn-success']) ?>
        <?= Html::a('Kembali', 'index.php?r=tindakan', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
