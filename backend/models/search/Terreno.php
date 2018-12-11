<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Terrenos as TerrenoModel;

/**
* Terreno represents the model behind the search form about `app\modules\crud\models\Terreno`.
*/
class Terreno extends TerrenoModel
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id_terreno', 'id_region'], 'integer'],
            [['nom_terreno'], 'safe'],
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
$query = TerrenoModel::find();

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
            'id_terreno' => $this->id_terreno,
            'id_region' => $this->id_region,
        ]);

        $query->andFilterWhere(['like', 'nom_terreno', $this->nom_terreno]);

return $dataProvider;
}
}