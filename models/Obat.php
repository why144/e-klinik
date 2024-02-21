<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "obat".
 *
 * @property int $id_obat
 * @property string $nama_obat
 * @property string $jenis_obat
 * @property int $stok
 * @property int $harga
 */
class Obat extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'obat';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_obat', 'jenis_obat', 'stok', 'harga'], 'required'],
            [['stok', 'harga'], 'integer'],
            [['nama_obat'], 'string', 'max' => 32],
            [['jenis_obat'], 'string', 'max' => 12],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_obat' => 'Id Obat',
            'nama_obat' => 'Nama Obat',
            'jenis_obat' => 'Jenis Obat',
            'stok' => 'Stok',
            'harga' => 'Harga',
        ];
    }
}
