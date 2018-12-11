<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var backend\models\search\Usuario $model
* @var yii\widgets\ActiveForm $form
*/
?>

<div class="usuario-search">

    <?php $form = ActiveForm::begin([
    'action' => ['index'],
    'method' => 'get',
    ]); ?>

    		<?= $form->field($model, 'id_usuario') ?>

		<?= $form->field($model, 'Usuario') ?>

		<?= $form->field($model, 'Contraseña') ?>

		<?= $form->field($model, 'Nombre') ?>

		<?= $form->field($model, 'Apellido_M') ?>

		<?php // echo $form->field($model, 'Apellido_P') ?>

		<?php // echo $form->field($model, 'Sexo') ?>

		<?php // echo $form->field($model, 'Contacto_T') ?>

		<?php // echo $form->field($model, 'Correo') ?>

		<?php // echo $form->field($model, 'Especialidad') ?>

		<?php // echo $form->field($model, 'Activo') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('cruds', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('cruds', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
