<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "listingusers".
 *
 * @property int $luId
 * @property int $userId
 * @property int $listingId
 *
 * @property Listings $listing
 * @property Listings $user
 */
class Listingusers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listingusers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'listingId'], 'required'],
            [['userId', 'listingId'], 'integer'],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['listingId' => 'listingId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['userId' => 'listingId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'luId' => 'Lu ID',
            'userId' => 'User ID',
            'listingId' => 'Listing ID',
        ];
    }

    /**
     * Gets query for [[Listing]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListing()
    {
        return $this->hasOne(Listings::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(Listings::className(), ['listingId' => 'userId']);
    }
}
