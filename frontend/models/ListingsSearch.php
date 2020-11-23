<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Listings;

/**
 * ListingsSearch represents the model behind the search form of `frontend\models\Listings`.
 */
class ListingsSearch extends Listings
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'listingTypeId', 'userId', 'basePrice', 'isApackage'], 'integer'],
            [['listingName', 'createdAt'], 'safe'],
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
        $query = Listings::find();

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
            'listingId' => $this->listingId,
            'listingTypeId' => $this->listingTypeId,
            'userId' => $this->userId,
            'basePrice' => $this->basePrice,
            'isApackage' => $this->isApackage,
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'listingName', $this->listingName]);

        return $dataProvider;
    }
}
