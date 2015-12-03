<?php
/**
 * @link http://github.com/nozzha/yii2-bootstrap_rtl/
 * @copyright Copyright (c) 2013 Nozzha [http://www.nozzha.com/]
 * @license https://opensource.org/licenses/MIT
 */

namespace nozzha\boostrap_rtl;

use yii\web\AssetBundle;

/**
 * @author Emad Omar <emad2030@gmail.com>
 * @since 1.0
 */
class BootstrapRTLAsset extends AssetBundle
{
    public $sourcePath = '@bower';
    public $css = [
        'css/site.css',
    ];
    public $js = [
    ];
    public $depends = [
        'yii\bootstrap\BootstrapAsset',
    ];
}
