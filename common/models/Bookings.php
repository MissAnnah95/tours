<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bookings".
 *
 * @property int $bookingId
 * @property int $listingId
 * @property int $userId
 * @property string $bookingDate
 * @property string $bookingExtraRequests
 * @property string $totalAmount
 * @property int $bookingStatus
 * @property string $createdBy
 * @property string $createdAt
 *
 * @property User $user
 * @property Listings $listing
 * @property Invoiceitems[] $invoiceitems
 */
class Bookings extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bookings';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'userId', 'bookingDate', 'bookingExtraRequests', 'totalAmount', 'bookingStatus', 'createdBy'], 'required'],
            [['listingId', 'userId', 'bookingStatus'], 'integer'],
            [['bookingDate', 'createdAt'], 'safe'],
            [['bookingExtraRequests', 'totalAmount', 'createdBy'], 'string', 'max' => 100],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['listingId' => 'listingId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'bookingId' => 'Booking ID',
            'listingId' => 'Listing ID',
            'userId' => 'User ID',
            'bookingDate' => 'Booking Date',
            'bookingExtraRequests' => 'Booking Extra Requests',
            'totalAmount' => 'Total Amount',
            'bookingStatus' => 'Booking Status',
            'createdBy' => 'Created By',
            'createdAt' => 'Created At',
        ];
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
     * Gets query for [[Listing]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListing()
    {
        return $this->hasOne(Listings::className(), ['listingId' => 'listingId']);
    }

    /**
     * Gets query for [[Invoiceitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInvoiceitems()
    {
        return $this->hasMany(Invoiceitems::className(), ['bookingId' => 'bookingId']);
    }
}
