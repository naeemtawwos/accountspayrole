<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaffDeductionsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Deductions';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-deductions-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff Deductions', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'staff_id',
            'deduction_id',
            'no_installments',
            'date_first_installment',
            'total_amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
