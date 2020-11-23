<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "packagetypes".
 *
 * @property int $packagetypeId
 * @property string $packageTypeDescription
 *
 * @property Packages[] $packages
 * @property Payments[] $payments
 */
class Packagetypes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'packagetypes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['packageTypeDescription'], 'required'],
            [['packageTypeDescription'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'packagetypeId' => 'Packagetype ID',
            'packageTypeDescription' => 'Package Type Description',
        ];
    }

    /**
     * Gets query for [[Packages]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPackages()
    {
        return $this->hasMany(Packages::className(), ['packagetypeId' => 'packagetypeId']);
    }

    /**
     * Gets query for [[Payments]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPayments()
    {
        return $this->hasMany(Payments::className(), ['paymentTypeId' => 'packagetypeId']);
    }
}
