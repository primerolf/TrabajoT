<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Clima $model
*/

$this->title = Yii::t('models', 'Clima');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Clima'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_clima, 'url' => ['view', 'id_clima' => $model->id_clima]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud clima-update">

    <h1>
        <?= Yii::t('models', 'Clima') ?>
        <small>
                        <?= Html::encode($model->id_clima) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id_clima' => $model->id_clima], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
