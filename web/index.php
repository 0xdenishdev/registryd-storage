<?php

// comment out the following two lines when deployed to production
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');
// Vendor
require(__DIR__ . '/../vendor/autoload.php');
// Yii
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
// Environment
require(__DIR__ . '/../common/env.php');

$config = require(__DIR__ . '/../config/web.php');
(new yii\web\Application($config))->run();
