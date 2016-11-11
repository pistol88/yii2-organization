<?php
namespace pistol88\organization;

use yii\base\BootstrapInterface;
use yii;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if(empty($app->modules['gridview'])) {
            $app->setModule('gridview', [
                'class' => '\kartik\grid\Module',
            ]);
        }
        
        if(!$app->has('organization')) {
            $app->set('organization', [
                'class' => '\pistol88\organization\Organization',
            ]);
        }
    }
}