<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Regione $model
*/

$this->title = Yii::t('models', 'Regione');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Regione'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_region, 'url' => ['view', 'id_region' => $model->id_region]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud regione-update">

    <h1>
        <?= Yii::t('models', 'Regione') ?>
        <small>
                        <?= Html::encode($model->id_region) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id_region' => $model->id_region], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
