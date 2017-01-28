<?php

namespace api\modules\api\v1\models;

use yii\db\ActiveRecord;
use api\modules\api\v1\models\repository\InstanceRepository;

/**
 * Class Instance
 *
 * @package api\modules\api\v1\models
 */
class Instance extends ActiveRecord
{
    const CREATED = 'Instance created';

    const UPDATED = 'Instance updated';

    const ERROR   = 'Instance error occurred';

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'instance';
    }

    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    /**
     * Returns Instance repository
     *
     * @return InstanceRepository
     */
    public static function find()
    {
        return new InstanceRepository(get_called_class());
    }

    /**
     * Define rules for validation
     */
    public function rules()
    {
        return [
            [
                [
                    'instanceId',
                    'image',
                    'command',
                    'created',
                    'state',
                    'status',
                    'ports',
                    'networks'
                ],
                'required'
            ],
        ];
    }
}
