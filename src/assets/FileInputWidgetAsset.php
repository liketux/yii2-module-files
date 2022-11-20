<?php

namespace liketux\files\assets;


use yii\web\AssetBundle;


class FileInputWidgetAsset extends AssetBundle
{
    public $sourcePath = '@vendor/liketux/yii2-module-files/assets/';

    public $css = [
        'yii2-floor12-files.css',
    ];
    public $js = [
        'yii2-floor12-files.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\jui\JuiAsset',
        'floor12\notification\NotificationAsset',
        'liketux\files\assets\CropperAsset',
        'liketux\files\assets\SimpleAjaxUploaderAsset',
    ];
}