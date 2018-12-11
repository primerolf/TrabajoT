<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Avistamiento as AvistamientoModel;

/**
* Avistamiento represents the model behind the search form about `app\modules\crud\models\Avistamiento`.
*/
class Avistamiento extends AvistamientoModel
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id_avistamiento', 'id_terreno', 'id_taxonomia', 'id_clima', 'cantidad', 'id_region', 'id_usuario', 'GeoN', 'GeoE'], 'integer'],
            [['Fecha'], 'safe'],
];
}

/**
* @inheritdoc
*/
public function scenarios()
{
// bypass scenarios() implementation in the parent class
return Model::scenarios();
}

/**
* Creates data provider instance with search query applied
*
* @param array $params
*
* @return ActiveDataProvider
*/
public function search($params)
{
$query = AvistamientoModel::find();

$dataProvider = new ActiveDataProvider([
'query' => $query,
]);

$this->load($params);

if (!$this->validate()) {
// uncomment the following line if you do not want to any records when validation fails
// $query->where('0=1');
return $dataProvider;
}

$query->andFilterWhere([
            'id_avistamiento' => $this->id_avistamiento,
            'id_terreno' => $this->id_terreno,
            'id_taxonomia' => $this->id_taxonomia,
            'id_clima' => $this->id_clima,
            'cantidad' => $this->cantidad,
            'id_region' => $this->id_region,
            'id_usuario' => $this->id_usuario,
            'GeoN' => $this->GeoN,
            'GeoE' => $this->GeoE,
            'Fecha' => $this->Fecha,
        ]);

return $dataProvider;
}
}