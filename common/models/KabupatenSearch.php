<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kabupaten;

/**
 * KabupatenSearch represents the model behind the search form of `common\models\Kabupaten`.
 */
class KabupatenSearch extends Kabupaten
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kabupaten', 'id_provinsi'], 'integer'],
            [['nama_kabupaten', 'created_at', 'updated_at'], 'safe'],
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
        $query = Kabupaten::find();

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
            'id_kabupaten' => $this->id_kabupaten,
            'id_provinsi' => $this->id_provinsi,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'nama_kabupaten', $this->nama_kabupaten]);

        return $dataProvider;
    }
}
