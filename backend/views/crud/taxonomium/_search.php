<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\search\Taxonomium $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="taxonomium-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'Id_Taxo') ?>

		<?= $form->field($model, 'nombre_Taxo') ?>

		<?= $form->field($model, 'Atributo_Padre') ?>

		<?= $form->field($model, 'ult_Actualizacion') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
