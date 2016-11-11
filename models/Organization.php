<?php
namespace pistol88\organization\models;

use Yii;
use yii\helpers\Url;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveQuery;
use yii\db\Expression;

class Organization extends \yii\db\ActiveRecord
{
    function behaviors()
    {
        return [
            'field' => [
                'class' => 'pistol88\field\behaviors\AttachFields',
            ],
        ];
    }
    
    public static function tableName()
    {
        return '{{%organization}}';
    }
    
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'unique'],
            [['active'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Наименование',
            'active' => 'Активность',
        ];
    }
}
