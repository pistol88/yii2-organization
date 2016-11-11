<?php
namespace pistol88\organization\assets;

use yii\web\AssetBundle;

class Chooseorganization extends AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        'js/choose-organization.js',
    ];

    public $css = [
        
    ];

    public function init()
    {
        $this->sourcePath = __DIR__ . '/../web';
        parent::init();
    }
}
