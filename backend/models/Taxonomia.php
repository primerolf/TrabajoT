<?php

namespace backend\models;

use Yii;
use backend\models\base\Taxonomia as BaseTaxonomia;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "Taxonomia".
 */
class Taxonomia extends BaseTaxonomia
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
