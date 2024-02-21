<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Obat $model */

$this->title = $model->id_obat;
$this->params['breadcrumbs'][] = ['label' => 'Obats', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="obat-view">


    <p>
        <?= Html::a('Update', ['Edit', 'id_obat' => $model->id_obat], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['Hapus', 'id_obat' => $model->id_obat], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Kembali', 'index.php?r=obat', ['class' => 'btn btn-primary']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_obat',
            'nama_obat',
            'jenis_obat',
            'stok',
            'harga',
        ],
    ]) ?>

</div>
