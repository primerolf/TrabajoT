<?php

namespace app\modules\crud\models;

use Yii;
use \app\modules\crud\models\base\Regione as BaseRegione;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "regiones".
 */
class Regione extends BaseRegione
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
