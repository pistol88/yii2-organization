<?php
namespace pistol88\organization\widgets;

use yii;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\ArrayHelper;

class ChooseOrganization extends \yii\base\Widget
{
    public $actionUrl = null;

    public function init()
    {

        if ($this->actionUrl === null) {
            $this->actionUrl = '/organization/organization/set-global';
        }

        \pistol88\organization\assets\Chooseorganization::register($this->getView());
        
        return parent::init();
    }

    public function run()
    {

        $organizations = \yii::$app->organization->getList();
        $organization = \yii::$app->organization->get();

        return $this->render('choose-organization', [
            'action' => $this->actionUrl,
            'organization' => $organization,
            'organizations' => $organizations
        ]);
    }
}
