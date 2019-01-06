<?php

namespace vendor\kouosl\banner\models;

use Yii;

/**
 * This is the model class for table "Count".
 *
 * @property int $number
 * @property string $ad_name
 * @property string $username
 */
class Count extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Count';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_name', 'username'], 'required'],
            [['ad_name', 'username'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'number' => 'Number',
            'ad_name' => 'Ad Name',
            'username' => 'Username',
        ];
    }
}
