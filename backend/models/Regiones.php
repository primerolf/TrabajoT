<?php

namespace backend\models;

use Yii;
use backend\models\base\Regiones as BaseRegiones;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "Regiones".
 */
class Regiones extends BaseRegiones
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
