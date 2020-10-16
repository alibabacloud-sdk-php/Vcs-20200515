<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models\SearchFaceResponse\data;

use AlibabaCloud\Tea\Model;

class records extends Model
{
    /**
     * @var string
     */
    public $gbId;

    /**
     * @var string
     */
    public $imageUrl;

    /**
     * @var float
     */
    public $leftTopX;

    /**
     * @var float
     */
    public $leftTopY;

    /**
     * @var string
     */
    public $matchSuggestion;

    /**
     * @var float
     */
    public $rightBottomX;

    /**
     * @var float
     */
    public $rightBottomY;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $targetImageUrl;

    /**
     * @var string
     */
    public $sourceId;
    protected $_name = [
        'gbId'            => 'GbId',
        'imageUrl'        => 'ImageUrl',
        'leftTopX'        => 'LeftTopX',
        'leftTopY'        => 'LeftTopY',
        'matchSuggestion' => 'MatchSuggestion',
        'rightBottomX'    => 'RightBottomX',
        'rightBottomY'    => 'RightBottomY',
        'score'           => 'Score',
        'targetImageUrl'  => 'TargetImageUrl',
        'sourceId'        => 'SourceId',
    ];

    public function validate()
    {
        Model::validateRequired('gbId', $this->gbId, true);
        Model::validateRequired('imageUrl', $this->imageUrl, true);
        Model::validateRequired('leftTopX', $this->leftTopX, true);
        Model::validateRequired('leftTopY', $this->leftTopY, true);
        Model::validateRequired('matchSuggestion', $this->matchSuggestion, true);
        Model::validateRequired('rightBottomX', $this->rightBottomX, true);
        Model::validateRequired('rightBottomY', $this->rightBottomY, true);
        Model::validateRequired('score', $this->score, true);
        Model::validateRequired('targetImageUrl', $this->targetImageUrl, true);
        Model::validateRequired('sourceId', $this->sourceId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->gbId) {
            $res['GbId'] = $this->gbId;
        }
        if (null !== $this->imageUrl) {
            $res['ImageUrl'] = $this->imageUrl;
        }
        if (null !== $this->leftTopX) {
            $res['LeftTopX'] = $this->leftTopX;
        }
        if (null !== $this->leftTopY) {
            $res['LeftTopY'] = $this->leftTopY;
        }
        if (null !== $this->matchSuggestion) {
            $res['MatchSuggestion'] = $this->matchSuggestion;
        }
        if (null !== $this->rightBottomX) {
            $res['RightBottomX'] = $this->rightBottomX;
        }
        if (null !== $this->rightBottomY) {
            $res['RightBottomY'] = $this->rightBottomY;
        }
        if (null !== $this->score) {
            $res['Score'] = $this->score;
        }
        if (null !== $this->targetImageUrl) {
            $res['TargetImageUrl'] = $this->targetImageUrl;
        }
        if (null !== $this->sourceId) {
            $res['SourceId'] = $this->sourceId;
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
        if (isset($map['GbId'])) {
            $model->gbId = $map['GbId'];
        }
        if (isset($map['ImageUrl'])) {
            $model->imageUrl = $map['ImageUrl'];
        }
        if (isset($map['LeftTopX'])) {
            $model->leftTopX = $map['LeftTopX'];
        }
        if (isset($map['LeftTopY'])) {
            $model->leftTopY = $map['LeftTopY'];
        }
        if (isset($map['MatchSuggestion'])) {
            $model->matchSuggestion = $map['MatchSuggestion'];
        }
        if (isset($map['RightBottomX'])) {
            $model->rightBottomX = $map['RightBottomX'];
        }
        if (isset($map['RightBottomY'])) {
            $model->rightBottomY = $map['RightBottomY'];
        }
        if (isset($map['Score'])) {
            $model->score = $map['Score'];
        }
        if (isset($map['TargetImageUrl'])) {
            $model->targetImageUrl = $map['TargetImageUrl'];
        }
        if (isset($map['SourceId'])) {
            $model->sourceId = $map['SourceId'];
        }

        return $model;
    }
}
