<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pasien".
 *
 * @property int $id_pasien
 * @property string $nama_pasien
 * @property string $no_hp
 * @property string $tgl_lahir
 * @property string $jenis_kelamin
 * @property string $keluhan
 *
 */
class Pasien extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pasien';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pasien', 'no_hp', 'tgl_lahir', 'jenis_kelamin', 'keluhan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nama_pasien'], 'string', 'max' => 32],
            [['no_hp'], 'string', 'max' => 13],
            [['jenis_kelamin'], 'string', 'max' => 1],
            [['keluhan'], 'string', 'max' => 255],
           
        ];
    }

    public static function  getAllPasien() 
    {
        $pasien = Pasien::find()->all();
        $pasien = ArrayHelper::map($pasien, 'id_pasien', 'nama_pasien');
        return $pasien;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pasien' => 'Id Pasien',
            'nama_pasien' => 'Nama Pasien',
            'no_hp' => 'No Hp',
            'tgl_lahir' => 'Tgl Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'keluhan' => 'Keluhan',
        ];
    }

    /**
     * Gets query for [[Wilayah]].
     *
     * @return \yii\db\ActiveQuery
     */
    
    
}
