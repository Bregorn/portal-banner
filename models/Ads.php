<?php

namespace vendor\kouosl\banner\models;

use Yii;

/**
 * This is the model class for table "Ads".
 *
 * @property int $ad_id
 * @property string $ad_name
 * @property string $ad_url
 * @property string $ad_imageurl
 */
class Ads extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Ads';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ad_name', 'ad_url', 'ad_imageurl'], 'required'],
            [['ad_name'], 'string', 'max' => 64],
            [['ad_url', 'ad_imageurl'], 'string', 'max' => 256],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ad_id' => 'Ad ID',
            'ad_name' => 'Ad Name',
            'ad_url' => 'Ad Url',
            'ad_imageurl' => 'Ad Imageurl',
        ];
    }
}
