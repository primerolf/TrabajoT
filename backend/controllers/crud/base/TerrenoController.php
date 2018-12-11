<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\controllers\crud\base;

use backend\models\Terrenos;
    use backend\models\search\Terreno as TerrenoSearch;
use yii\web\Controller;
use yii\web\HttpException;
use yii\helpers\Url;
use yii\filters\AccessControl;
use dmstr\bootstrap\Tabs;

/**
* TerrenoController implements the CRUD actions for Terreno model.
*/
class TerrenoController extends Controller
{


/**
* @var boolean whether to enable CSRF validation for the actions in this controller.
* CSRF validation is enabled only when both this property and [[Request::enableCsrfValidation]] are true.
*/
public $enableCsrfValidation = false;


/**
* Lists all Terreno models.
* @return mixed
*/
public function actionIndex()
{
    $searchModel  = new TerrenoSearch;
    $dataProvider = $searchModel->search($_GET);

Tabs::clearLocalStorage();

Url::remember();
\Yii::$app->session['__crudReturnUrl'] = null;

return $this->render('index', [
'dataProvider' => $dataProvider,
    'searchModel' => $searchModel,
]);
}

/**
* Displays a single Terreno model.
* @param integer $id_terreno
*
* @return mixed
*/
public function actionView($id_terreno)
{
\Yii::$app->session['__crudReturnUrl'] = Url::previous();
Url::remember();
Tabs::rememberActiveState();

return $this->render('view', [
'model' => $this->findModel($id_terreno),
]);
}

/**
* Creates a new Terreno model.
* If creation is successful, the browser will be redirected to the 'view' page.
* @return mixed
*/
public function actionCreate()
{
$model = new Terrenos;

try {
if ($model->load($_POST) && $model->save()) {
return $this->redirect(['view', 'id_terreno' => $model->id_terreno]);
} elseif (!\Yii::$app->request->isPost) {
$model->load($_GET);
}
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
$model->addError('_exception', $msg);
}
return $this->render('create', ['model' => $model]);
}

/**
* Updates an existing Terreno model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id_terreno
* @return mixed
*/
public function actionUpdate($id_terreno)
{
$model = $this->findModel($id_terreno);

if ($model->load($_POST) && $model->save()) {
return $this->redirect(Url::previous());
} else {
return $this->render('update', [
'model' => $model,
]);
}
}

/**
* Deletes an existing Terreno model.
* If deletion is successful, the browser will be redirected to the 'index' page.
* @param integer $id_terreno
* @return mixed
*/
public function actionDelete($id_terreno)
{
try {
$this->findModel($id_terreno)->delete();
} catch (\Exception $e) {
$msg = (isset($e->errorInfo[2]))?$e->errorInfo[2]:$e->getMessage();
\Yii::$app->getSession()->addFlash('error', $msg);
return $this->redirect(Url::previous());
}

// TODO: improve detection
$isPivot = strstr('$id_terreno',',');
if ($isPivot == true) {
return $this->redirect(Url::previous());
} elseif (isset(\Yii::$app->session['__crudReturnUrl']) && \Yii::$app->session['__crudReturnUrl'] != '/') {
Url::remember(null);
$url = \Yii::$app->session['__crudReturnUrl'];
\Yii::$app->session['__crudReturnUrl'] = null;

return $this->redirect($url);
} else {
return $this->redirect(['index']);
}
}

/**
* Finds the Terreno model based on its primary key value.
* If the model is not found, a 404 HTTP exception will be thrown.
* @param integer $id_terreno
* @return Terreno the loaded model
* @throws HttpException if the model cannot be found
*/
protected function findModel($id_terreno)
{
if (($model = Terrenos::findOne($id_terreno)) !== null) {
return $model;
} else {
throw new HttpException(404, 'The requested page does not exist.');
}
}
}
