<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;
use yii\widgets\DetailView;
use yii\widgets\Pjax;
use dmstr\bootstrap\Tabs;

/**
 * @var yii\web\View $this
 * @var app\modules\crud\models\Avistamiento $model
 */
$copyParams = $model->attributes;

$this->title = Yii::t('models', 'Avistamiento');
$this->params['breadcrumbs'][] = ['label' => Yii::t('models', 'Avistamientos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => (string)$model->id_avistamiento, 'url' => ['view', 'id_avistamiento' => $model->id_avistamiento]];
$this->params['breadcrumbs'][] = Yii::t('cruds', 'View');
?>
<div class="giiant-crud avistamiento-view">

    <!-- flash message -->
    <?php if (\Yii::$app->session->getFlash('deleteError') !== null) : ?>
        <span class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <?= \Yii::$app->session->getFlash('deleteError') ?>
        </span>
    <?php endif; ?>

    <h1>
        <?= Yii::t('models', 'Avistamiento') ?>
        <small>
            <?= Html::encode($model->id_avistamiento) ?>
        </small>
    </h1>


    <div class="clearfix crud-navigation">

        <!-- menu buttons -->
        <div class='pull-left'>
            <?= Html::a(
                '<span class="glyphicon glyphicon-pencil"></span> ' . Yii::t('cruds', 'Edit'),
                ['update', 'id_avistamiento' => $model->id_avistamiento],
                ['class' => 'btn btn-info']) ?>

            <?= Html::a(
                '<span class="glyphicon glyphicon-copy"></span> ' . Yii::t('cruds', 'Copy'),
                ['create', 'id_avistamiento' => $model->id_avistamiento, 'Avistamiento' => $copyParams],
                ['class' => 'btn btn-success']) ?>

            <?= Html::a(
                '<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'New'),
                ['create'],
                ['class' => 'btn btn-success']) ?>
        </div>

        <div class="pull-right">
            <?= Html::a('<span class="glyphicon glyphicon-list"></span> '
                . Yii::t('cruds', 'Full list'), ['index'], ['class' => 'btn btn-default']) ?>
        </div>

    </div>

    <hr/>

    <?php $this->beginBlock('app\modules\crud\models\Avistamiento'); ?>


    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id_terreno' => [
                'label' => 'Terreno',
                'value' => $model->terreno->nom_terreno,
            ],
            'id_clima' => [
                'label' => 'Clima',
                'value' => $model->clima->nom_clima
            ],
            'cantidad',
            'id_region' => [
                'label' => 'Region',
                'value' => $model->region->nom_region
            ],
            'id_usuario' => [
                'label' => 'Usuario',
                'value' => $model->usuario->Nombre,
            ],
            'GeoN',
            'GeoE',
            'Fecha',
            'id_taxonomia' => [
                'label' => 'Taxonomia',
                'value' => $model->taxonomia->nombre_Taxo,
            ],
        ],
    ]); ?>


    <hr/>

    <?= Html::a('<span class="glyphicon glyphicon-trash"></span> ' . Yii::t('cruds', 'Delete'), ['delete', 'id_avistamiento' => $model->id_avistamiento],
        [
            'class' => 'btn btn-danger',
            'data-confirm' => '' . Yii::t('cruds', 'Are you sure to delete this item?') . '',
            'data-method' => 'post',
        ]); ?>
    <?php $this->endBlock(); ?>



    <?= Tabs::widget(
        [
            'id' => 'relation-tabs',
            'encodeLabels' => false,
            'items' => [
                [
                    'label' => '<b class=""># ' . Html::encode($model->id_avistamiento) . '</b>',
                    'content' => $this->blocks['app\modules\crud\models\Avistamiento'],
                    'active' => true,
                ],
            ]
        ]
    );
    ?>
</div>
