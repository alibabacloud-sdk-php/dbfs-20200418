<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DBFS\V20200418\Models;

use AlibabaCloud\Tea\Model;

class DescribeDbfsSpecificationsRequest extends Model
{
    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $ecsInstanceType;

    /**
     * @var string
     */
    public $category;
    protected $_name = [
        'regionId'        => 'RegionId',
        'ecsInstanceType' => 'EcsInstanceType',
        'category'        => 'Category',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->ecsInstanceType) {
            $res['EcsInstanceType'] = $this->ecsInstanceType;
        }
        if (null !== $this->category) {
            $res['Category'] = $this->category;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDbfsSpecificationsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['EcsInstanceType'])) {
            $model->ecsInstanceType = $map['EcsInstanceType'];
        }
        if (isset($map['Category'])) {
            $model->category = $map['Category'];
        }

        return $model;
    }
}
