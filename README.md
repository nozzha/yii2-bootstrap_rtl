# Bootstrap RTL Wrapper - Yii2 extension

This is a wrapper extension for Yii2, which provides an `Asset` class to easily include required files

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nozzha/yii2-bootstrap_rtl
```

or add

```json
"nozzha/yii2-bootstrap_rtl": "~1.0"
```

to the require section of your composer.json.


Usage
-----

Either register the asset bundle in the view

```php
/* @var $this yii\web\View */

\nozzha\bootstrap_rtl\BootstrapRTLAsset::register($this);
```

or add it to the `$depends` variable on your `AppAsset` asset bundle

```php
class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        ...
        'nozzha\bootstrap_rtl\BootstrapRTLAsset',
        ...
    ];
}
```
