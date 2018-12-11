<?php

namespace backend\models\search;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\crud\models\Usuario as UsuarioModel;

/**
* Usuario represents the model behind the search form about `app\modules\crud\models\Usuario`.
*/
class Usuario extends UsuarioModel
{
/**
* @inheritdoc
*/
public function rules()
{
return [
[['id_usuario', 'Contraseña', 'Contacto_T', 'Activo'], 'integer'],
            [['Usuario', 'Nombre', 'Apellido_M', 'Apellido_P', 'Sexo', 'Correo', 'Especialidad'], 'safe'],
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
$query = UsuarioModel::find();

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
            'id_usuario' => $this->id_usuario,
            'Contraseña' => $this->Contraseña,
            'Contacto_T' => $this->Contacto_T,
            'Activo' => $this->Activo,
        ]);

        $query->andFilterWhere(['like', 'Usuario', $this->Usuario])
            ->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Apellido_M', $this->Apellido_M])
            ->andFilterWhere(['like', 'Apellido_P', $this->Apellido_P])
            ->andFilterWhere(['like', 'Sexo', $this->Sexo])
            ->andFilterWhere(['like', 'Correo', $this->Correo])
            ->andFilterWhere(['like', 'Especialidad', $this->Especialidad]);

return $dataProvider;
}
}