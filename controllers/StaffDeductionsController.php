<?php

namespace app\controllers;

use Yii;
use app\models\StaffDeductions;
use app\models\StaffDeductionsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StaffDeductionsController implements the CRUD actions for StaffDeductions model.
 */
class StaffDeductionsController extends Controller
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
     * Lists all StaffDeductions models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StaffDeductionsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single StaffDeductions model.
     * @param string $staff_id
     * @param integer $deduction_id
     * @return mixed
     */
    public function actionView($staff_id, $deduction_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($staff_id, $deduction_id),
        ]);
    }

    /**
     * Creates a new StaffDeductions model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new StaffDeductions();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'deduction_id' => $model->deduction_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing StaffDeductions model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $staff_id
     * @param integer $deduction_id
     * @return mixed
     */
    public function actionUpdate($staff_id, $deduction_id)
    {
        $model = $this->findModel($staff_id, $deduction_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'staff_id' => $model->staff_id, 'deduction_id' => $model->deduction_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing StaffDeductions model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $staff_id
     * @param integer $deduction_id
     * @return mixed
     */
    public function actionDelete($staff_id, $deduction_id)
    {
        $this->findModel($staff_id, $deduction_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the StaffDeductions model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $staff_id
     * @param integer $deduction_id
     * @return StaffDeductions the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($staff_id, $deduction_id)
    {
        if (($model = StaffDeductions::findOne(['staff_id' => $staff_id, 'deduction_id' => $deduction_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
