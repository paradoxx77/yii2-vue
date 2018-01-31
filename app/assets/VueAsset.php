<?php

namespace app\assets;

use Yii;

class VueAsset extends \yii\web\AssetBundle
{
    public $sourcePath = '@bower/vue/dist';

    public $js = [
        'vue.min.js'
    ];
}
