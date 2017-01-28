<?php

namespace api\modules\api\v1\services;

use api\modules\api\v1\models\repository\InstanceRepository;

/**
 * Class Instance
 *
 * @package api\modules\api\v1\services
 */
class Instance implements InstanceInterface
{
    /**
     * @inheritdoc
     */
    public function findInstanceById(
        InstanceRepository $repository,
        $id
    ) {
        return $repository->findById($id);
    }
}
