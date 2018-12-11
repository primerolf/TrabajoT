<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Usuario $model
*/

$this->title = Yii::t('models', 'Usuario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Usuario'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_usuario, 'url' => ['view', 'id_usuario' => $model->id_usuario]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud usuario-update">

    <h1>
        <?= Yii::t('models', 'Usuario') ?>
        <small>
                        <?= Html::encode($model->id_usuario) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id_usuario' => $model->id_usuario], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
