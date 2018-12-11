<?php
/**
 * Created by PhpStorm.
 * User: blacksesion
 * Date: 11-12-2018
 * Time: 11:53
 */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

/**
 * @var yii\web\View $this
 * @var yii\data\ActiveDataProvider $dataProvider
 * @var backend\models\search\Avistamiento $searchModel
 */

$this->title = Yii::t('models', 'Avistamientos');
$this->params['breadcrumbs'][] = $this->title;

if (isset($actionColumnTemplates)) {
    $actionColumnTemplate = implode(' ', $actionColumnTemplates);
    $actionColumnTemplateString = $actionColumnTemplate;
} else {
    Yii::$app->view->params['pageButtons'] = Html::a('<span class="glyphicon glyphicon-plus"></span> ' . Yii::t('cruds', 'New'), ['create'], ['class' => 'btn btn-success']);
    $actionColumnTemplateString = "{view} {update} {delete}";
}
$actionColumnTemplateString = '<div class="action-buttons">' . $actionColumnTemplateString . '</div>';
?>
<div class="giiant-crud avistamiento-index">

    <?php \yii\widgets\Pjax::begin(['id' => 'pjax-main', 'enableReplaceState' => false, 'linkSelector' => '#pjax-main ul.pagination a, th a', 'clientOptions' => ['pjax:success' => 'function(){alert("yo")}']]) ?>

    <h1>
        <?= Yii::t('models', 'Avistamientos') ?>
        <small>
            Lista
        </small>
    </h1>

    <hr/>

    <div class="table-responsive">
        <?= GridView::widget([
            'dataProvider' => $dataProvider,
            'pager' => [
                'class' => yii\widgets\LinkPager::className(),
                'firstPageLabel' => Yii::t('cruds', 'First'),
                'lastPageLabel' => Yii::t('cruds', 'Last'),
            ],
//            'filterModel' => $searchModel,
            'tableOptions' => ['class' => 'table table-striped table-bordered table-hover'],
            'headerRowOptions' => ['class' => 'x'],
            'columns' => [
                'id_terreno' => [
                    'header' => 'Terreno',
                    'value' => function ($data) {
                        return $data->terreno->nom_terreno;
                    },
                ],
                'id_clima' => [
                    'header' => 'Clima',
                    'value' => function ($data) {
                        return $data->clima->nom_clima;
                    },
                ],
                'cantidad',
                'id_region',
                'id_usuario' => [
                    'header' => 'Usuario',
                    'value' => function ($data) {
                        return $data->usuario->Nombre;
                    },
                ],
                'GeoN',
                'GeoE',
                'Fecha',
                'id_taxonomia' => [
                    'header' => 'Taxonomia',
                    'value' => function ($data) {
                        return $data->taxonomia->nombre_Taxo;
                    },
                ],
            ],
        ]); ?>
    </div>

</div>


<?php \yii\widgets\Pjax::end() ?>


