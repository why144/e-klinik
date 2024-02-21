<?php

use app\models\Pasien;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\Pjax;
/** @var yii\web\View $this */
/** @var app\models\PasienSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Pasiens';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pasien-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Tambah Data Pasien', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_pasien',
            'nama_pasien',
            'no_hp',
            'tgl_lahir',
            'jenis_kelamin',
            //'keluhan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Pasien $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id_pasien' => $model->id_pasien]);
                 }
            ],
        ],
    ]); ?>

    <?php Pjax::end(); ?>

</div>
