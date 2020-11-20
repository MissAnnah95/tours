<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "listingtypes".
 *
 * @property int $listingTypeId
 * @property string $listingTypeDesc
 *
 * @property Listings[] $listings
 */
class Listingtypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listingtypes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingTypeDesc'], 'required'],
            [['listingTypeDesc'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listingTypeId' => 'Listing Type ID',
            'listingTypeDesc' => 'Listing Type Desc',
        ];
    }

    /**
     * Gets query for [[Listings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListings()
    {
        return $this->hasMany(Listings::className(), ['listingTypeId' => 'listingTypeId']);
    }
}
