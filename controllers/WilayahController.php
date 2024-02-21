<?php

namespace app\controllers;

use app\models\Wilayah;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * WilayahController implements the CRUD actions for Wilayah model.
 */
class WilayahController extends Controller
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
     * Lists all Wilayah models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Wilayah::find(),
            /*
            'pagination' => [
                'pageSize' => 50
            ],
            'sort' => [
                'defaultOrder' => [
                    'id_wilayah' => SORT_DESC,
                ]
            ],
            */
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Wilayah model.
     * @param int $id_wilayah Id Wilayah
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_wilayah)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_wilayah),
        ]);
    }

    /**
     * Creates a new Wilayah model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Wilayah();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'id_wilayah' => $model->id_wilayah]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Wilayah model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_wilayah Id Wilayah
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_wilayah)
    {
        $model = $this->findModel($id_wilayah);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id_wilayah' => $model->id_wilayah]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Wilayah model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_wilayah Id Wilayah
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_wilayah)
    {
        $this->findModel($id_wilayah)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Wilayah model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_wilayah Id Wilayah
     * @return Wilayah the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_wilayah)
    {
        if (($model = Wilayah::findOne(['id_wilayah' => $id_wilayah])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
