<?php

namespace api\modules\api\v1\services;

use api\modules\api\v1\models\Instance;
use api\modules\api\v1\models\repository\InstanceRepository;

/**
 * Interface InstanceInterface
 *
 * @package api\modules\api\v1\services
 */
interface InstanceInterface
{
    /**
     * Finds instance model by given id
     *
     * @param InstanceRepository $repository
     * @param string $id
     * @return Instance|array|null
     */
    public function findInstanceById(
        InstanceRepository $repository,
        $id
    );
}