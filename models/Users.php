<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $phone
 * @property string|null $dob
 * @property string|null $profile_image
 * @property string|null $address_1
 * @property string|null $address_2
 * @property string|null $postal_code
 * @property string|null $city
 * @property string|null $state
 * @property string|null $country
 * @property int $type 1 for the admin, 0 for the user
 * @property string|null $gender
 * @property string|null $verification_code
 * @property string|null $verification_code_expire_at
 * @property string|null $email_verified_at
 * @property int $is_blocked
 * @property string|null $password
 * @property string|null $remember_token
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property SubmitSurveys[] $submitSurveys
 */
class Users extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const GENDER_MALE = 'male';
    const GENDER_FEMALE = 'female';
    const GENDER_OTHER = 'other';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone', 'dob', 'profile_image', 'address_1', 'address_2', 'postal_code', 'city', 'state', 'country', 'gender', 'verification_code', 'verification_code_expire_at', 'email_verified_at', 'password', 'remember_token', 'created_at', 'updated_at'], 'default', 'value' => null],
            [['is_blocked'], 'default', 'value' => 0],
            [['name', 'email'], 'required'],
            [['dob', 'verification_code_expire_at', 'email_verified_at', 'created_at', 'updated_at'], 'safe'],
            [['type', 'is_blocked'], 'integer'],
            [['gender'], 'string'],
            [['name', 'email', 'phone', 'profile_image', 'address_1', 'address_2', 'postal_code', 'city', 'state', 'country', 'password'], 'string', 'max' => 255],
            [['verification_code'], 'string', 'max' => 6],
            [['remember_token'], 'string', 'max' => 100],
            ['gender', 'in', 'range' => array_keys(self::optsGender())],
            [['email'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'dob' => 'Dob',
            'profile_image' => 'Profile Image',
            'address_1' => 'Address 1',
            'address_2' => 'Address 2',
            'postal_code' => 'Postal Code',
            'city' => 'City',
            'state' => 'State',
            'country' => 'Country',
            'type' => 'Type',
            'gender' => 'Gender',
            'verification_code' => 'Verification Code',
            'verification_code_expire_at' => 'Verification Code Expire At',
            'email_verified_at' => 'Email Verified At',
            'is_blocked' => 'Is Blocked',
            'password' => 'Password',
            'remember_token' => 'Remember Token',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[SubmitSurveys]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSubmitSurveys()
    {
        return $this->hasMany(SubmitSurveys::class, ['user_id' => 'id']);
    }


    /**
     * column gender ENUM value labels
     * @return string[]
     */
    public static function optsGender()
    {
        return [
            self::GENDER_MALE => 'male',
            self::GENDER_FEMALE => 'female',
            self::GENDER_OTHER => 'other',
        ];
    }

    /**
     * @return string
     */
    public function displayGender()
    {
        return self::optsGender()[$this->gender];
    }

    /**
     * @return bool
     */
    public function isGenderMale()
    {
        return $this->gender === self::GENDER_MALE;
    }

    public function setGenderToMale()
    {
        $this->gender = self::GENDER_MALE;
    }

    /**
     * @return bool
     */
    public function isGenderFemale()
    {
        return $this->gender === self::GENDER_FEMALE;
    }

    public function setGenderToFemale()
    {
        $this->gender = self::GENDER_FEMALE;
    }

    /**
     * @return bool
     */
    public function isGenderOther()
    {
        return $this->gender === self::GENDER_OTHER;
    }

    public function setGenderToOther()
    {
        $this->gender = self::GENDER_OTHER;
    }
}
