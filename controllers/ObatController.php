<?php

namespace app\controllers;

use app\models\Obat;
use app\models\ObatSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ObatController implements the CRUD actions for Obat model.
 */
class ObatController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all Obat models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new ObatSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Obat model.
     * @param int $id_obat Id Obat
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_obat)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_obat),
        ]);
    }

    /**
     * Creates a new Obat model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Obat();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_obat' => $model->id_obat]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Obat model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_obat Id Obat
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_obat)
    {
        $model = $this->findModel($id_obat);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_obat' => $model->id_obat]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Obat model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_obat Id Obat
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_obat)
    {
        $this->findModel($id_obat)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Obat model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_obat Id Obat
     * @return Obat the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_obat)
    {
        if (($model = Obat::findOne(['id_obat' => $id_obat])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
