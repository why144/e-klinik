<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pasien $model */

$this->title = $model->id_pasien;
$this->params['breadcrumbs'][] = ['label' => 'Pasiens', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pasien-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['Edit', 'id_pasien' => $model->id_pasien], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['Hapus', 'id_pasien' => $model->id_pasien], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Kembali', 'index.php?r=pasien', ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pasien',
            'nama_pasien',
            'no_hp',
            'tgl_lahir',
            'jenis_kelamin',
            'keluhan',
        ],
    ]) ?>

</div>
