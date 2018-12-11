<?php

namespace backend\models;

use Yii;
use backend\models\base\Avistamiento as BaseAvistamiento;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "avistamiento".
 */
class Avistamiento extends BaseAvistamiento
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

    public function getRegion(){
        return $this->hasOne(\backend\models\Regiones::className(), ['id_region'=>'id_region']);
    }

    public function getTerreno(){
        return $this->hasOne(\backend\models\Terrenos::className(), ['id_terreno'=>'id_terreno']);
    }

    public function getClima(){
        return $this->hasOne(\backend\models\Climas::className(), ['id_clima'=>'id_clima']);
    }

    public function getUsuario(){
        return $this->hasOne(\backend\models\Usuario::className(), ['id_usuario'=>'id_usuario']);
    }

    public function getTaxonomia(){
        return $this->hasOne(\backend\models\Taxonomia::className(), ['Id_Taxo'=>'id_taxonomia']);
    }
}
