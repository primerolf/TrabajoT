<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "ClimaController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ClimaController extends \yii\rest\ActiveController
{
public $modelClass = 'app\modules\crud\models\Clima';
}
