<?php

namespace frontend\models;
use common\models\User;



use Yii;

/**
 * This is the model class for table "listings".
 *
 * @property int $listingId
 * @property int|null $listingTypeId
 * @property int|null $userId
 * @property string $listingName
 * @property int $basePrice
 * @property int $isApackage
 * @property string $createdAt
 *
 * @property Bookings[] $bookings
 * @property Images[] $images
 * @property Itinerary[] $itineraries
 * @property Listingabouts[] $listingabouts
 * @property Listingtypes $listingType
 * @property User $user
 * @property Listingusers[] $listingusers
 * @property Locations[] $locations
 * @property Packages[] $packages
 * @property Pricingtable[] $pricingtables
 * @property Reviews[] $reviews
 */
class Listings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'listings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingTypeId', 'userId', 'basePrice', 'isApackage'], 'integer'],
            [['listingName', 'basePrice', 'isApackage'], 'required'],
            [['createdAt'], 'safe'],
            [['listingName'], 'string', 'max' => 255],
            [['listingTypeId'], 'exist', 'skipOnError' => true, 'targetClass' => Listingtypes::className(), 'targetAttribute' => ['listingTypeId' => 'listingTypeId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'listingId' => 'Listing ID',
            'listingTypeId' => 'Listing Type ID',
            'userId' => 'User ID',
            'listingName' => 'Listing Name',
            'basePrice' => 'Base Price',
            'isApackage' => 'Is Apackage',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Bookings]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBookings()
    {
        return $this->hasMany(Bookings::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Images]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Images::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Itineraries]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItineraries()
    {
        return $this->hasMany(Itinerary::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Listingabouts]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingabouts()
    {
        return $this->hasMany(Listingabouts::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[ListingType]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingType()
    {
        return $this->hasOne(Listingtypes::className(), ['listingTypeId' => 'listingTypeId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }

    /**
     * Gets query for [[Listingusers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListingusers()
    {
        return $this->hasMany(Listingusers::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Locations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Locations::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Packages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPackages()
    {
        return $this->hasMany(Packages::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Pricingtables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPricingtables()
    {
        return $this->hasMany(Pricingtable::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Reviews::className(), ['listingId' => 'listingId']);
    }
}
