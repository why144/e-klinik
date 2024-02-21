<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Wilayah $model */

$this->title = 'Create Wilayah';
$this->params['breadcrumbs'][] = ['label' => 'Wilayahs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wilayah-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
