<?php
// Aliases
Yii::setAlias('api', dirname(dirname(__DIR__)) . '/api');

// Di container
\Yii::$container->set(
    'api\modules\api\v1\services\InstanceInterface',
    'api\modules\api\v1\services\Instance'
);