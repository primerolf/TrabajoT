<?php

namespace backend\controllers\crud\api;

/**
* This is the class for REST controller "TaxonomiumController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class TaxonomiumController extends \yii\rest\ActiveController
{
public $modelClass = 'app\modules\crud\models\Taxonomium';
}
