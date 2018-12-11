<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Taxonomium $model
*/

$this->title = Yii::t('models', 'Taxonomium');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Taxonomia'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="giiant-crud taxonomium-create">

    <h1>
        <?= Yii::t('models', 'Taxonomium') ?>
        <small>
                        <?= Html::encode($model->Id_Taxo) ?>
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
