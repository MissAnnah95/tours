<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "regions".
 *
 * @property int $regionId
 * @property string $regionName
 *
 * @property Locations[] $locations
 */
class Regions extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'regions';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['regionName'], 'required'],
            [['regionName'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'regionId' => 'Region ID',
            'regionName' => 'Region Name',
        ];
    }

    /**
     * Gets query for [[Locations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Locations::className(), ['regionId' => 'regionId']);
    }
}
