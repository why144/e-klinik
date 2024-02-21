<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Transaksi $model */

$this->title = $model->id_transaksi;
$this->params['breadcrumbs'][] = ['label' => 'Transaksis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="transaksi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id_transaksi' => $model->id_transaksi], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id_transaksi' => $model->id_transaksi], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Kembali', 'index.php?r=transaksi', ['class' => 'btn btn-success']) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_transaksi',
            'id_pasien',
            'id_pegawai',
            'id_tindakan',
            'obat',
            'jumlah_bayar',
            'tgl_transaksi',
            'status_pemabayaran',
        ],
    ]) ?>

</div>
