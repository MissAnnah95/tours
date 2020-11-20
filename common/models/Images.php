<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "images".
 *
 * @property int $imageId
 * @property int $listingId
 * @property string $imagePath
 *
 * @property Listings $listing
 */
class Images extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'images';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['listingId', 'imagePath'], 'required'],
            [['listingId'], 'integer'],
            [['imagePath'], 'string', 'max' => 100],
            [['listingId'], 'exist', 'skipOnError' => true, 'targetClass' => Listings::className(), 'targetAttribute' => ['listingId' => 'listingId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'imageId' => 'Image ID',
            'listingId' => 'Listing ID',
            'imagePath' => 'Image Path',
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
}
