<?php

namespace app\controllers;

use Yii;
use app\models\Countrylanguage;
use app\models\CountrylanguageSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CountrylanguageController implements the CRUD actions for Countrylanguage model.
 */
class CountrylanguageController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Countrylanguage models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CountrylanguageSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Countrylanguage model.
     * @param string $CountryCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($CountryCode, $Language)
    {
        return $this->render('view', [
            'model' => $this->findModel($CountryCode, $Language),
        ]);
    }

    /**
     * Creates a new Countrylanguage model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Countrylanguage();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Countrylanguage model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $CountryCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($CountryCode, $Language)
    {
        $model = $this->findModel($CountryCode, $Language);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'CountryCode' => $model->CountryCode, 'Language' => $model->Language]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Countrylanguage model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $CountryCode
     * @param string $Language
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($CountryCode, $Language)
    {
        $this->findModel($CountryCode, $Language)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Countrylanguage model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $CountryCode
     * @param string $Language
     * @return Countrylanguage the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($CountryCode, $Language)
    {
        if (($model = Countrylanguage::findOne(['CountryCode' => $CountryCode, 'Language' => $Language])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
