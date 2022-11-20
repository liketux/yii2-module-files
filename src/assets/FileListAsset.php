<?php
/**
 * Created by PhpStorm.
 * User: floor12
 * Date: 31.12.2017
 * Time: 21:28
 */

namespace liketux\files\assets;


use yii\web\AssetBundle;


class FileListAsset extends AssetBundle
{
    public $sourcePath = '@vendor/liketux/yii2-module-files/assets/';

    public $css = [
        'yii2-floor12-files-block.css',
    ];
    public $js = [
        'yii2-floor12-lightbox-params.js',
        'yii2-floor12-files-block.js',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
        'floor12\notification\NotificationAsset',
        'liketux\files\assets\LightboxAsset'
    ];
}