<?php

namespace vendor\kouosl\banner;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use vendor\kouosl\banner\models\Ads;

/**
 * AdsSearch represents the model behind the search form of `vendor\kouosl\banner\models\Ads`.
 */
class AdsSearch extends Ads
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_id'], 'integer'],
            [['ad_name', 'ad_url', 'ad_imageurl'], 'safe'],
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
        $query = Ads::find();

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
            'ad_id' => $this->ad_id,
        ]);

        $query->andFilterWhere(['like', 'ad_name', $this->ad_name])
            ->andFilterWhere(['like', 'ad_url', $this->ad_url])
            ->andFilterWhere(['like', 'ad_imageurl', $this->ad_imageurl]);

        return $dataProvider;
    }
}
