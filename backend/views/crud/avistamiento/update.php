<?php

use yii\helpers\Html;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Avistamiento $model
*/

$this->title = Yii::t('models', 'Avistamiento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Avistamiento'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_avistamiento, 'url' => ['view', 'id_avistamiento' => $model->id_avistamiento]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'Edit');
?>
<div class="giiant-crud avistamiento-update">

    <h1>
        <?= Yii::t('models', 'Avistamiento') ?>
        <small>
                        <?= Html::encode($model->id_avistamiento) ?>
        </small>
    </h1>

    <div class="crud-navigation">
        <?= Html::a('<span class="glyphicon glyphicon-file"></span> ' . Yii::t('cruds', 'View'), ['view', 'id_avistamiento' => $model->id_avistamiento], ['class' => 'btn btn-default']) ?>
    </div>

    <hr />

    <?php echo $this->render('_form', [
    'model' => $model,
    ]); ?>

</div>
