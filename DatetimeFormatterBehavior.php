<?php

namespace denis909\yii;

use Yii;

class DatetimeFormatterBehavior extends FormatterBehavior
{

    public $suffix = 'asDatetime';

    public $format = 'php:Y-m-d H:i:s';

    protected function encodeValue($value)
    {
        return $value ? Yii::$app->formatter->asDatetime($value, $this->format) : $value;
    }

}