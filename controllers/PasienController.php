<?php

namespace app\controllers;

use Yii;
use app\models\Pasien;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\PasienSearch;
use yii\web\NotFoundHttpException;

/**
 * PasienController implements the CRUD actions for Pasien model.
 */
class PasienController extends Controller
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
     * Lists all Pasien models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new PasienSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Pasien model.
     * @param int $id_pasien Id Pasien
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id_pasien)
    {
        return $this->render('view', [
            'model' => $this->findModel($id_pasien),
        ]);
    }

    /**
     * Creates a new Pasien model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new Pasien();
        
        if ($model->load(Yii::$app->request->post())) {
            $model->tgl_lahir = \Yii::$app->formatter->asDate($model->tgl_lahir, "yyyy-MM-dd");
            $model->save();

            return $this->redirect(['view', 'id_pasien' => $model->id_pasien]);

        }


        // if ($this->request->isPost) {
        //     if ($model->load($this->request->post()) && $model->save()) {
        //         return $this->redirect(['view', 'id_pasien' => $model->id_pasien]);
        //     }
        // } else {
        //     $model->loadDefaultValues();
        // }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Pasien model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id_pasien Id Pasien
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id_pasien)
    {
        $model = $this->findModel($id_pasien);

        if ($this->request->isPost && $model->load($this->request->post()))  {
            $model->tgl_lahir = \Yii::$app->formatter->asDate($model->tgl_lahir, "yyyy-MM-dd");
            $model->save();

            return $this->redirect(['view', 'id_pasien' => $model->id_pasien]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Pasien model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id_pasien Id Pasien
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id_pasien)
    {
        $this->findModel($id_pasien)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Pasien model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id_pasien Id Pasien
     * @return Pasien the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id_pasien)
    {
        if (($model = Pasien::findOne(['id_pasien' => $id_pasien])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
