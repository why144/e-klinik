<?php

use app\models\Obat;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\ObatSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Data Obat';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="obat-index">

    <p>
        <?= Html::a('Tambah Data Obat', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_obat',
            'nama_obat',
            'jenis_obat',
            'stok',
            'harga',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Obat $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_obat' => $model->id_obat]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
