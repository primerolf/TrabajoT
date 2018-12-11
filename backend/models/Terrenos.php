<?php

namespace backend\models;

use Yii;
use backend\models\base\Terrenos as BaseTerrenos;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "Terrenos".
 */
class Terrenos extends BaseTerrenos
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
