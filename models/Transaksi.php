<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "transaksi".
 *
 * @property int $id_transaksi
 * @property int $id_pasien
 * @property int $id_pegawai
 * @property int $jenis_transaksi
 * @property int $id_tindakan
 * @property int $obat
 * @property int $jumlah_bayar
 * @property string $tgl_transaksi
 * @property string $status_pemabayaran
 */
class Transaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_pasien', 'id_pegawai', 'jenis_transaksi', 'id_tindakan', 'obat', 'jumlah_bayar', 'tgl_transaksi', 'status_pembayaran'], 'required'],
            [['id_pasien', 'id_pegawai', 'id_tindakan', 'obat', 'jumlah_bayar'], 'integer'],
            [['jenis_transaksi'], 'string', 'max' => 32],
            [['tgl_transaksi'], 'safe'],
            [['status_pembayaran'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_transaksi' => 'Id Transaksi',
            'id_pasien' => 'Id Pasien',
            'id_pegawai' => 'Id Pegawai',
            'jenis_transaksi' => 'Jenis Transaksi',
            'id_tindakan' => 'Id Tindakan',
            'obat' => 'Obat',
            'jumlah_bayar' => 'Jumlah Bayar',
            'tgl_transaksi' => 'Tgl Transaksi',
            'status_pembayaran' => 'Status Pembayaran',
        ];
    }

    
}
