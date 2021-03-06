<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "Regiones".
 *
 * @property integer $id_region
 * @property string $nom_region
 * @property string $aliasModel
 */
abstract class Regiones extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'Regiones';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nom_region'], 'required'],
            [['nom_region'], 'string', 'max' => 30]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_region' => 'Id Region',
            'nom_region' => 'Nom Region',
        ];
    }




}
