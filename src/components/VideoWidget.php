<?php


namespace liketux\files\components;


use liketux\files\models\File;
use liketux\files\models\FileType;
use yii\base\Widget;
use yii\helpers\Html;

class VideoWidget extends Widget
{
    /** @var File */
    public $model;
    /** @var array */
    public $options = [];

    /**
     * @return string|null
     */
    public function run(): ?string
    {
        if ($this->model->type !== FileType::VIDEO)
            return null;
        $source = Html::tag('source', null, ['src' => $this->model->getHref(), 'type' => $this->model->content_type]);
        return Html::tag('video', $source, $this->options);
    }
}
