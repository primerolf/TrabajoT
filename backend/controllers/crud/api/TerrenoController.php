<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "TerrenoController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class TerrenoController extends \yii\rest\ActiveController
{
public $modelClass = 'app\modules\crud\models\Terreno';
}
