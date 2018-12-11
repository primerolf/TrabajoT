<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\search\Avistamiento $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="avistamiento-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id_avistamiento') ?>

		<?= $form->field($model, 'id_terreno') ?>

		<?= $form->field($model, 'id_taxonomia') ?>

		<?= $form->field($model, 'id_clima') ?>

		<?= $form->field($model, 'cantidad') ?>

		<?php // echo $form->field($model, 'id_region') ?>

		<?php // echo $form->field($model, 'id_usuario') ?>

		<?php // echo $form->field($model, 'GeoN') ?>

		<?php // echo $form->field($model, 'GeoE') ?>

		<?php // echo $form->field($model, 'Fecha') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
