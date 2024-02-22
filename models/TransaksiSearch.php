<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Transaksi;

/**
 * TransaksiSearch represents the model behind the search form of `app\models\Transaksi`.
 */
class TransaksiSearch extends Transaksi
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_transaksi', 'id_pasien', 'id_pegawai', 'id_tindakan', 'obat', 'jumlah_bayar'], 'integer'],
            [['tgl_transaksi', 'status_pembayaran', 'jenis_transaksi'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Transaksi::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_transaksi' => $this->id_transaksi,
            'id_pasien' => $this->id_pasien,
            'id_pegawai' => $this->id_pegawai,
            'jenis_transaksi' => $this->jenis_transaksi,
            'id_tindakan' => $this->id_tindakan,
            'obat' => $this->obat,
            'jumlah_bayar' => $this->jumlah_bayar,
            'tgl_transaksi' => $this->tgl_transaksi,
        ]);

        $query->andFilterWhere(['like', 'status_pembayaran', $this->status_pembayaran]);

        return $dataProvider;
    }
}
