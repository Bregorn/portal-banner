<?php

namespace vendor\kouosl\banner;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\banner\models\Count;

/**
 * CountSearch represents the model behind the search form of `vendor\kouosl\banner\models\Count`.
 */
class CountSearch extends Count
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number'], 'integer'],
            [['ad_name', 'username'], 'safe'],
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
        $query = Count::find();

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
            'number' => $this->number,
        ]);

        $query->andFilterWhere(['like', 'ad_name', $this->ad_name])
            ->andFilterWhere(['like', 'username', $this->username]);

        return $dataProvider;
    }
}
