<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wilayah $model */

$this->title = 'Update Wilayah: ' . $model->id_wilayah;
$this->params['breadcrumbs'][] = ['label' => 'Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_wilayah, 'url' => ['view', 'id_wilayah' => $model->id_wilayah]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="wilayah-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
