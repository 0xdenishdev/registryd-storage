<?php

namespace api\modules\api\v1\models\repository;

use yii\db\ActiveQuery;
use api\modules\api\v1\models\Instance;

/**
 * Class InstanceRepository
 *
 * @package api\modules\api\v1\models\repository
 */
class InstanceRepository extends ActiveQuery
{
    /**
     * Finds Instance model by given instance identifier
     *
     * @param string $instanceId
     * @return Instance|array|null
     */
    public function findById($instanceId)
    {
        return $this
            ->where(['instanceId' => $instanceId])
            ->one();
    }
}
