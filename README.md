Yii2 Equalize.js Asset
======================

Simple asset bundle for equalize.js jQuery plugin (http://tsvensen.github.io/equalize.js/)
Equalize.js is a jquery plugin that allows make divs with equal height or width.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nerburish/yii2-equalize "dev-master"
```

or add

```
"nerburish/yii2-equalize": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

You can register the asset in your AppAsset 

class AppAsset extends AssetBundle
{
    ...
    public $depends = [
        ...
        'nerburish\equalize\EqualizeAsset'
    ];
}

or register it directly in a view 

<?php
\nerburish\equalize\EqualizeAsset::register($this);
?>

And then use as it is described in the documentation (http://tsvensen.github.io/equalize.js/):

<div id="height-example" class="example">
    <div>equalize</div>
    <div>equalize content height</div>
    <div>equalize</div>
    <div>equalize</div>
    <div>equalize</div>
    <div>equalize content</div>
    <div>equalize</div>
    <div>equalize</div>
    <div>equalize content height</div>
    <div>equalize</div>
  </div>
 
<?php $this->registerJs('$('#height-example').equalize(); // defaults to height') ?>





 