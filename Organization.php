<?php
namespace pistol88\organization;

use yii;
use pistol88\organization\models\Organization as OrganizationModel;

class Organization extends \yii\base\Component
{
    public $storage_name = 'organization-id';
    
    public function getList()
    {
        return OrganizationModel::find()->where(['active' => '1'])->all();
    }
    
    public function get($id = null)
    {
        if(!$id) {
            $id = yii::$app->session->get($this->storage_name);
        }
        
        return OrganizationModel::findOne($id);
    }
    
    public function set($id)
    {
        yii::$app->session->set($this->storage_name, $id);

        return true;
    }
}