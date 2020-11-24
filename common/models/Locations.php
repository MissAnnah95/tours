<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "locations".
 *
 * @property int $locationId
 * @property int $listingId
 * @property int|null $regionId
 * @property int $countryId
 * @property int|null $cityId
 * @property float|null $latitude
 * @property float|null $longitude
 * @property string|null $address
 *
 * @property Cities $city
 * @property Country $country
 * @property Listings $listing
 * @property Regions $region
 */
class Locations extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'locations';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'countryId'], 'required'],
            [['listingId', 'regionId', 'countryId', 'cityId'], 'integer'],
            [['latitude', 'longitude'], 'number'],
            [['address'], 'string'],
            [['cityId'], 'exist', 'skipOnError' => true, 'targetClass' => Cities::className(), 'targetAttribute' => ['cityId' => 'cityId']],
            [['countryId'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['countryId' => 'countryId']],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['listingId' => 'listingId']],
            [['regionId'], 'exist', 'skipOnError' => true, 'targetClass' => Regions::className(), 'targetAttribute' => ['regionId' => 'regionId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'locationId' => 'Location ID',
            'listingId' => 'Listing ID',
            'regionId' => 'Region ID',
            'countryId' => 'Country ID',
            'cityId' => 'City ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'address' => 'Address',
        ];
    }

    /**
     * Gets query for [[City]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCity()
    {
        return $this->hasOne(Cities::className(), ['cityId' => 'cityId']);
    }

    /**
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['countryId' => 'countryId']);
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
     * Gets query for [[Region]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRegion()
    {
        return $this->hasOne(Regions::className(), ['regionId' => 'regionId']);
    }
}
