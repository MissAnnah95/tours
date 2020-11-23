<?php

namespace frontend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "profile".
 *
 * @property int $profileId
 * @property int|null $userId
 * @property string $isCompany
 * @property string $isSupplier
 * @property int|null $countryId
 * @property resource $profileImagePath
 * @property string $fullNames
 * @property int $phone
 * @property string $dateOfBirth
 * @property string $address
 * @property resource $status
 *
 * @property User $user
 * @property Country $country
 * @property Supplier[] $suppliers
 */
class Profile extends \yii\db\ActiveRecord
{

    public $profile;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profile';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'countryId', 'phone'], 'integer'],
            [['isCompany', 'isSupplier', 'profileImagePath', 'fullNames', 'phone', 'dateOfBirth', 'address', 'status'], 'required'],
            [['profileImagePath', 'address', 'status'], 'string'],
            [['dateOfBirth'], 'safe'],
            [['isCompany', 'isSupplier', 'fullNames'], 'string', 'max' => 255],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['countryId'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['countryId' => 'countryId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'profileId' => 'Profile ID',
            'userId' => 'User ID',
            'isCompany' => 'Is Company',
            'isSupplier' => 'Is Supplier',
            'countryId' => 'Country ID',
            'profileImagePath' => 'Profile Image Path',
            'fullNames' => 'Your Names',
            'phone' => 'Phone Number',
            'dateOfBirth' => 'Date Of Birth',
            'address' => 'Address',
            'status' => 'Status',
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
     * Gets query for [[Country]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['countryId' => 'countryId']);
    }

    /**
     * Gets query for [[Suppliers]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSuppliers()
    {
        return $this->hasMany(Supplier::className(), ['profileId' => 'profileId']);
    }
}
