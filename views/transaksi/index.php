<?php

use app\models\Transaksi;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\TransaksiSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Transaksi';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="transaksi-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Transaksi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_transaksi',
            'id_pasien',
            'id_pegawai',
            // 'id_tindakan',
            // 'obat',
            'jumlah_bayar',
            'tgl_transaksi',
            'status_pemabayaran',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Transaksi $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_transaksi' => $model->id_transaksi]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
