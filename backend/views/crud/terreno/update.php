<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Terreno $model
*/

$this->title = Yii::t('models', 'Terreno');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Terreno'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_terreno, 'url' => ['view', 'id_terreno' => $model->id_terreno]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud terreno-update">

    <h1>
        <?= Yii::t('models', 'Terreno') ?>
        <small>
                        <?= Html::encode($model->id_terreno) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id_terreno' => $model->id_terreno], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
