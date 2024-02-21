<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Tindakan $model */

$this->title = $model->nama_tindakan;
$this->params['breadcrumbs'][] = ['label' => 'Tindakans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="tindakan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['Edit', 'id_tindakan' => $model->id_tindakan], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['Hapus', 'id_tindakan' => $model->id_tindakan], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Kembali', 'index.php?r=tindakan', ['class' => 'btn btn-success']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_tindakan',
            'nama_tindakan',
            'biaya',
        ],
    ]) ?>

</div>
