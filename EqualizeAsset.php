<?php
/**
 * @copyright Copyright (c); nerburish, 2016
 * @package yii2-equalize
 */

namespace nerburish\equalize;

use yii\web\AssetBundle;

/**
 * Asset bundle for Equalize.js (http://tsvensen.github.io/equalize.js/)
 *
 * @package nerburish\equalize
 */
class EqualizeAsset extends AssetBundle
{
    public $sourcePath = '@bower/equalize';
    
    public $js = [
        'js/equalize.min.js',
    ];
	
    public $depends = [
        'yii\web\JqueryAsset'
    ];	
}