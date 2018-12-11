<?php

namespace backend\models;

use Yii;
use backend\models\base\Climas as BaseClimas;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "Climas".
 */
class Climas extends BaseClimas
{

    public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
            parent::rules(),
            [
                # custom validation rules
            ]
        );
    }
}
