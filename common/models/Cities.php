<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "cities".
 *
 * @property int $cityId
 * @property int $countyrId
 * @property string $cityName
 *
 * @property Country $countyr
 * @property Locations[] $locations
 */
class Cities extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cities';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['countyrId', 'cityName'], 'required'],
            [['countyrId'], 'integer'],
            [['cityName'], 'string', 'max' => 100],
            [['countyrId'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['countyrId' => 'countryId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cityId' => 'City ID',
            'countyrId' => 'Countyr ID',
            'cityName' => 'City Name',
        ];
    }

    /**
     * Gets query for [[Countyr]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountyr()
    {
        return $this->hasOne(Country::className(), ['countryId' => 'countyrId']);
    }

    /**
     * Gets query for [[Locations]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLocations()
    {
        return $this->hasMany(Locations::className(), ['cityId' => 'cityId']);
    }
}
