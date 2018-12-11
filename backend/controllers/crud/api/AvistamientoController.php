<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "AvistamientoController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class AvistamientoController extends \yii\rest\ActiveController
{
public $modelClass = 'app\modules\crud\models\Avistamiento';
}
