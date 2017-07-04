<?php
/**
 * Created by PhpStorm.
 * User: Feanaro
 * Date: 03.07.2017
 * Time: 20:28
 */

namespace backend\assets;


use yii\web\AssetBundle;

class AdminLtePluginAsset extends AssetBundle
{
    public $sourcePath = '@vendor/almasaeed2010/adminlte/plugins';
    public $js = [
        'datatables/dataTables.bootstrap.min.js',
        // more plugin Js here
    ];
    public $css = [
        'datatables/dataTables.bootstrap.css',
        // more plugin CSS here
    ];
    public $depends = [
        'dmstr\web\AdminLteAsset',
    ];
}