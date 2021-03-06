<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "Taxonomia".
 *
 * @property integer $Id_Taxo
 * @property string $nombre_Taxo
 * @property integer $Atributo_Padre
 * @property string $ult_Actualizacion
 * @property string $aliasModel
 */
abstract class Taxonomia extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Taxonomia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_Taxo', 'Atributo_Padre', 'ult_Actualizacion'], 'required'],
            [['Atributo_Padre'], 'integer'],
            [['ult_Actualizacion'], 'safe'],
            [['nombre_Taxo'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Taxo' => 'Id  Taxo',
            'nombre_Taxo' => 'Nombre  Taxo',
            'Atributo_Padre' => 'Atributo  Padre',
            'ult_Actualizacion' => 'Ult  Actualizacion',
        ];
    }




}
