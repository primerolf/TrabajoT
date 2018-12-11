<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Taxonomia as TaxonomiumModel;

/**
* Taxonomium represents the model behind the search form about `app\modules\crud\models\Taxonomium`.
*/
class Taxonomium extends TaxonomiumModel
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['Id_Taxo', 'Atributo_Padre'], 'integer'],
            [['nombre_Taxo', 'ult_Actualizacion'], 'safe'],
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
$query = TaxonomiumModel::find();

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
            'Id_Taxo' => $this->Id_Taxo,
            'Atributo_Padre' => $this->Atributo_Padre,
            'ult_Actualizacion' => $this->ult_Actualizacion,
        ]);

        $query->andFilterWhere(['like', 'nombre_Taxo', $this->nombre_Taxo]);

return $dataProvider;
}
}