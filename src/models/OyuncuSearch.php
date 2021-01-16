<?php

namespace mustafaaktas0\futbolcu\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use mustafaaktas0\futbolcu\models\Oyuncu;

/**
 * OyuncuSearch represents the model behind the search form of `mustafaaktas0\futbolcu\models\Oyuncu`.
 */
class OyuncuSearch extends Oyuncu
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['oyuncu_adi', 'takim_adi', 'mevkisi', 'maas', 'ulke'], 'safe'],
            [['yas', 'id'], 'integer'],
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
        $query = Oyuncu::find();

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
            'yas' => $this->yas,
            'id' => $this->id,
        ]);

        $query->andFilterWhere(['like', 'oyuncu_adi', $this->oyuncu_adi])
            ->andFilterWhere(['like', 'takim_adi', $this->takim_adi])
            ->andFilterWhere(['like', 'mevkisi', $this->mevkisi])
            ->andFilterWhere(['like', 'maas', $this->maas])
            ->andFilterWhere(['like', 'ulke', $this->ulke]);

        return $dataProvider;
    }
}
