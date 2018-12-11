<?php

namespace app\modules\crud\models;

use Yii;
use \app\modules\crud\models\base\Taxonomium as BaseTaxonomium;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "Taxonomia".
 */
class Taxonomium extends BaseTaxonomium
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
