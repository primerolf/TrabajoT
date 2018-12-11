<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Regione $model
*/

$this->title = Yii::t('models', 'Regione');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Regiones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud regione-create">

    <h1>
        <?= Yii::t('models', 'Regione') ?>
        <small>
                        <?= Html::encode($model->id_region) ?>
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
