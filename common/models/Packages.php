<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "packages".
 *
 * @property int $packageId
 * @property int $listingId
 * @property int $packagetypeId
 * @property string $packageName
 * @property int $availableTickets
 * @property string $startDate
 * @property string $endDate
 * @property string $duration
 *
 * @property Listings $listing
 * @property Packagetypes $packagetype
 */
class Packages extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'packages';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'packagetypeId', 'packageName', 'availableTickets', 'startDate', 'endDate', 'duration'], 'required'],
            [['listingId', 'packagetypeId', 'availableTickets'], 'integer'],
            [['startDate', 'endDate'], 'safe'],
            [['packageName', 'duration'], 'string', 'max' => 100],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['listingId' => 'listingId']],
            [['packagetypeId'], 'exist', 'skipOnError' => true, 'targetClass' => Packagetypes::className(), 'targetAttribute' => ['packagetypeId' => 'packagetypeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'packageId' => 'Package ID',
            'listingId' => 'Listing ID',
            'packagetypeId' => 'Packagetype ID',
            'packageName' => 'Package Name',
            'availableTickets' => 'Available Tickets',
            'startDate' => 'Start Date',
            'endDate' => 'End Date',
            'duration' => 'Duration',
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
     * Gets query for [[Packagetype]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPackagetype()
    {
        return $this->hasOne(Packagetypes::className(), ['packagetypeId' => 'packagetypeId']);
    }
}
