<?php

use kartik\date\DatePicker;
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use \dmstr\bootstrap\Tabs;
use yii\helpers\StringHelper;
use yii\helpers\ArrayHelper;
use \backend\models\Climas;
use \backend\models\Regiones;
use \backend\models\Usuario;
use \backend\models\Taxonomia;
use \backend\models\Terrenos;

/**
 * @var yii\web\View $this
 * @var app\modules\crud\models\Avistamiento $model
 * @var yii\widgets\ActiveForm $form
 */

?>

<div class="avistamiento-form">

    <?php $form = ActiveForm::begin([
            'id' => 'Avistamiento',
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


            <!-- attribute id_terreno -->
            <?php echo $form->field($model, 'id_terreno')->dropdownList(
                ArrayHelper::map(Terrenos::find()->all(), 'id_terreno', 'nom_terreno'),
                [
                    'id' => 'select-terreno',
                ]
            ) ?>

            <!-- attribute id_clima -->

            <?php echo $form->field($model, 'id_clima')->dropdownList(
                ArrayHelper::map(Climas::find()->all(), 'id_clima', 'nom_clima'),
                [
                    'id' => 'select-climas',
                ]
            ) ?>

            <!-- attribute cantidad -->
            <?= $form->field($model, 'cantidad')->textInput() ?>

            <!-- attribute id_region -->
            <?php echo $form->field($model, 'id_region')->dropdownList(
                ArrayHelper::map(Regiones::find()->all(), 'id_region', 'nom_region'),
                [
                    'id' => 'select-regiones',
                ]
            ) ?>

            <!-- attribute id_usuario -->
            <?php echo $form->field($model, 'id_usuario')->dropdownList(
                ArrayHelper::map(\backend\models\Usuario::find()->all(), 'id_usuario', 'Nombre'),
                [
                    'id' => 'select-usuario',
                ]
            ) ?>

            <!-- attribute GeoN -->
            <?= $form->field($model, 'GeoN')->textInput() ?>

            <!-- attribute GeoE -->
            <?= $form->field($model, 'GeoE')->textInput() ?>

            <!-- attribute Fecha -->
            <?php  echo $form->field($model, 'Fecha')->widget(DatePicker::classname(), [
                'options' => ['placeholder' => 'Has Clic ...'],
                'pluginOptions' => [
                    'autoclose'=>true,
                    'format' => 'yyyy-mm-dd',
                    'todayHighlight' => true,
                ]
            ]); ?>

            <!-- attribute id_taxonomia -->
            <?php echo $form->field($model, 'id_taxonomia')->dropdownList(
                ArrayHelper::map(\backend\models\Taxonomia::find()->all(), 'Id_Taxo', 'nombre_Taxo'),
                [
                    'id' => 'select_taxonomia',
                ]
            ) ?>
            <?php $this->endBlock(); ?>

            <?=
            Tabs::widget(
                [
                    'encodeLabels' => false,
                    'items' => [
                        [
                            'label' => Yii::t('models', 'Avistamiento'),
                            'content' => $this->blocks['main'],
                            'active' => true,
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

