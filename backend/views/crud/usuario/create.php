<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Usuario $model
*/

$this->title = Yii::t('models', 'Usuario');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Usuarios'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud usuario-create">

    <h1>
        <?= Yii::t('models', 'Usuario') ?>
        <small>
                        <?= Html::encode($model->id_usuario) ?>
        </small>
    </h1>

    <div class="clearfix crud-navigation">
        <div class="pull-left">
            <?=             Html::a(
            Yii::t('cruds', 'Cancel'),
            \yii\helpers\Url::previous(),
            ['class' => 'btn btn-default']) ?>
        </div>
    </div>

    <hr />

    <?= $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
