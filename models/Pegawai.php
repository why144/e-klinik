<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pegawai".
 *
 * @property int $id_pegawai
 * @property string $nama_pegawai
 * @property string $jenis_kelamin
 * @property string $tanggal_lahir
 * @property int $no_hp
 * @property string $email
 * @property string $jabatan
 * @property string $tanggal_bergabung
 * @property string $alamat
 * @property int $gaji
 *
 * @property Transaksi[] $transaksis
 */
class Pegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_pegawai', 'jenis_kelamin', 'tanggal_lahir', 'no_hp', 'email', 'jabatan', 'tanggal_bergabung', 'alamat', 'gaji'], 'required'],
            [['tanggal_lahir', 'tanggal_bergabung'], 'safe'],
            [[ 'gaji'], 'integer'],
            [[ 'no_hp'], 'string', 'max' => 13],
            [['nama_pegawai', 'email', 'jabatan'], 'string', 'max' => 32],
            [['jenis_kelamin'], 'string', 'max' => 2],
            [['alamat'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_pegawai' => 'Id Pegawai',
            'nama_pegawai' => 'Nama Pegawai',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tanggal_lahir' => 'Tanggal Lahir',
            'no_hp' => 'No Hp',
            'email' => 'Email',
            'jabatan' => 'Jabatan',
            'tanggal_bergabung' => 'Tanggal Bergabung',
            'alamat' => 'Alamat',
            'gaji' => 'Gaji',
        ];
    }

    /**
     * Gets query for [[Transaksis]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksis()
    {
        return $this->hasMany(Transaksi::class, ['id_pegawai' => 'id_pegawai']);
    }
}
