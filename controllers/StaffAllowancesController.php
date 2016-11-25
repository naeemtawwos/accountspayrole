<?php

namespace app\controllers;

use Yii;
use app\models\StaffAllowances;
use app\models\StaffAllowancesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaffAllowancesController implements the CRUD actions for StaffAllowances model.
 */
class StaffAllowancesController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all StaffAllowances models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffAllowancesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StaffAllowances model.
     * @param string $staff_id
     * @param integer $allowance_id
     * @return mixed
     */
    public function actionView($staff_id, $allowance_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($staff_id, $allowance_id),
        ]);
    }

    /**
     * Creates a new StaffAllowances model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaffAllowances();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'allowance_id' => $model->allowance_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing StaffAllowances model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $staff_id
     * @param integer $allowance_id
     * @return mixed
     */
    public function actionUpdate($staff_id, $allowance_id)
    {
        $model = $this->findModel($staff_id, $allowance_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'allowance_id' => $model->allowance_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StaffAllowances model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $staff_id
     * @param integer $allowance_id
     * @return mixed
     */
    public function actionDelete($staff_id, $allowance_id)
    {
        $this->findModel($staff_id, $allowance_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StaffAllowances model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $staff_id
     * @param integer $allowance_id
     * @return StaffAllowances the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($staff_id, $allowance_id)
    {
        if (($model = StaffAllowances::findOne(['staff_id' => $staff_id, 'allowance_id' => $allowance_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
