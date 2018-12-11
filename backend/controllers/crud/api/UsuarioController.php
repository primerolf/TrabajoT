<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "UsuarioController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class UsuarioController extends \yii\rest\ActiveController
{
public $modelClass = 'app\modules\crud\models\Usuario';
}
