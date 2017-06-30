<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use Yii;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/style.css'
    ];
    public $js = [
        'js/lib/jquery.flexisel.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    /**
     * AppAsset constructor.
     */
    public function __construct()
    {
        $action = Yii::$app->controller->action->id;
        $controller = Yii::$app->controller->id;

        switch ($controller) {

            // SITE
            case 'site':
                switch ($action) {
                    case 'index':
                        $this->js[] = 'js/libs/responsiveslides.min.js';
                        break;
                }

                break;
        }

        parent::__construct();
    }

}
