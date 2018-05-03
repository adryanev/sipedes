<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kelurahan;

/**
 * KelurahanSearch represents the model behind the search form of `common\models\Kelurahan`.
 */
class KelurahanSearch extends Kelurahan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kelurahan', 'id_kecamatan'], 'integer'],
            [['nama_kelurahan', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Kelurahan::find();

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
            'id_kelurahan' => $this->id_kelurahan,
            'id_kecamatan' => $this->id_kecamatan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_kelurahan', $this->nama_kelurahan]);

        return $dataProvider;
    }
}