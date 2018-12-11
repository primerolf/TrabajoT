<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Regiones as RegioneModel;

/**
* Regione represents the model behind the search form about `app\modules\crud\models\Regione`.
*/
class Regione extends RegioneModel
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id_region'], 'integer'],
            [['nom_region'], 'safe'],
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
$query = RegioneModel::find();

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
            'id_region' => $this->id_region,
        ]);

        $query->andFilterWhere(['like', 'nom_region', $this->nom_region]);

return $dataProvider;
}
}