<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Avistamiento $model
*/

$this->title = Yii::t('models', 'Avistamiento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Avistamientos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud avistamiento-create">

    <h1>
        <?= Yii::t('models', 'Avistamiento') ?>
        <small>
                        <?= Html::encode($model->id_avistamiento) ?>
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
