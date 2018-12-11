<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "RegioneController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class RegioneController extends \yii\rest\ActiveController
{
public $modelClass = 'app\modules\crud\models\Regione';
}
