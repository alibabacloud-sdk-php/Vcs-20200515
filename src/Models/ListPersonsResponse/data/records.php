<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonsResponse\data;

use AlibabaCloud\SDK\Vcs\V20200515\Models\ListPersonsResponse\data\records\tagList;
use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $firstAppearTime;

    /**
     * @var string
     */
    public $personId;

    /**
     * @var string
     */
    public $picUrl;

    /**
     * @var tagList[]
     */
    public $tagList;
    protected $_name = [
        'firstAppearTime' => 'FirstAppearTime',
        'personId'        => 'PersonId',
        'picUrl'          => 'PicUrl',
        'tagList'         => 'TagList',
    ];

    public function validate()
    {
        Model::validateRequired('firstAppearTime', $this->firstAppearTime, true);
        Model::validateRequired('personId', $this->personId, true);
        Model::validateRequired('picUrl', $this->picUrl, true);
        Model::validateRequired('tagList', $this->tagList, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firstAppearTime) {
            $res['FirstAppearTime'] = $this->firstAppearTime;
        }
        if (null !== $this->personId) {
            $res['PersonId'] = $this->personId;
        }
        if (null !== $this->picUrl) {
            $res['PicUrl'] = $this->picUrl;
        }
        if (null !== $this->tagList) {
            $res['TagList'] = [];
            if (null !== $this->tagList && \is_array($this->tagList)) {
                $n = 0;
                foreach ($this->tagList as $item) {
                    $res['TagList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return records
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirstAppearTime'])) {
            $model->firstAppearTime = $map['FirstAppearTime'];
        }
        if (isset($map['PersonId'])) {
            $model->personId = $map['PersonId'];
        }
        if (isset($map['PicUrl'])) {
            $model->picUrl = $map['PicUrl'];
        }
        if (isset($map['TagList'])) {
            if (!empty($map['TagList'])) {
                $model->tagList = [];
                $n              = 0;
                foreach ($map['TagList'] as $item) {
                    $model->tagList[$n++] = null !== $item ? tagList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
