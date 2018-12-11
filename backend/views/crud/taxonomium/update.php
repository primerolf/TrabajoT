<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Taxonomium $model
*/

$this->title = Yii::t('models', 'Taxonomium');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Taxonomium'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->Id_Taxo, 'url' => ['view', 'Id_Taxo' => $model->Id_Taxo]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud taxonomium-update">

    <h1>
        <?= Yii::t('models', 'Taxonomium') ?>
        <small>
                        <?= Html::encode($model->Id_Taxo) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'Id_Taxo' => $model->Id_Taxo], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
