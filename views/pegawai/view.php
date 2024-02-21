<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\Pegawai $model */

$this->title = $model->nama_pegawai;
$this->params['breadcrumbs'][] = ['label' => 'Pegawai', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="pegawai-view">


    <p>
        <?= Html::a('Edit', ['update', 'id_pegawai' => $model->id_pegawai], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Hapus', ['delete', 'id_pegawai' => $model->id_pegawai], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
        <?= Html::a('Kembali', 'index.php?r=pegawai', ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_pegawai',
            'nama_pegawai',
            'jenis_kelamin',
            'tanggal_lahir',
            'no_hp',
            'email:email',
            'jabatan',
            'tanggal_bergabung',
            'alamat',
            'gaji',
        ],
    ]) ?>

</div>
