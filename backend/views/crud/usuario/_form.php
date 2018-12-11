<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;

/**
* @var yii\web\View $this
* @var app\modules\crud\models\Usuario $model
* @var yii\widgets\ActiveForm $form
*/

?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin([
    'id' => 'Usuario',
    'layout' => 'horizontal',
    'enableClientValidation' => true,
    'errorSummaryCssClass' => 'error-summary alert alert-danger',
    'fieldConfig' => [
             'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
             'horizontalCssClasses' => [
                 'label' => 'col-sm-2',
                 #'offset' => 'col-sm-offset-4',
                 'wrapper' => 'col-sm-8',
                 'error' => '',
                 'hint' => '',
             ],
         ],
    ]
    );
    ?>

    <div class="">
        <?php $this->beginBlock('main'); ?>

        <p>
            

<!-- attribute Usuario -->
			<?= $form->field($model, 'Usuario')->textInput(['maxlength' => true]) ?>

<!-- attribute Contraseña -->
			<?= $form->field($model, 'Contraseña')->textInput() ?>

<!-- attribute Nombre -->
			<?= $form->field($model, 'Nombre')->textarea(['rows' => 6]) ?>

<!-- attribute Apellido_M -->
			<?= $form->field($model, 'Apellido_M')->textarea(['rows' => 6]) ?>

<!-- attribute Apellido_P -->
			<?= $form->field($model, 'Apellido_P')->textarea(['rows' => 6]) ?>

<!-- attribute Sexo -->
			<?= $form->field($model, 'Sexo')->textInput(['maxlength' => true]) ?>

<!-- attribute Contacto_T -->
			<?= $form->field($model, 'Contacto_T')->textInput() ?>

<!-- attribute Correo -->
			<?= $form->field($model, 'Correo')->textarea(['rows' => 6]) ?>

<!-- attribute Especialidad -->
			<?= $form->field($model, 'Especialidad')->textarea(['rows' => 6]) ?>

<!-- attribute Activo -->
			<?= $form->field($model, 'Activo')->textInput() ?>
        </p>
        <?php $this->endBlock(); ?>
        
        <?=
    Tabs::widget(
                 [
                    'encodeLabels' => false,
                    'items' => [ 
                        [
    'label'   => Yii::t('models', 'Usuario'),
    'content' => $this->blocks['main'],
    'active'  => true,
],
                    ]
                 ]
    );
    ?>
        <hr/>

        <?php echo $form->errorSummary($model); ?>

        <?= Html::submitButton(
        '<span class="glyphicon glyphicon-check"></span> ' .
        ($model->isNewRecord ? Yii::t('cruds', 'Create') : Yii::t('cruds', 'Save')),
        [
        'id' => 'save-' . $model->formName(),
        'class' => 'btn btn-success'
        ]
        );
        ?>

        <?php ActiveForm::end(); ?>

    </div>

</div>

