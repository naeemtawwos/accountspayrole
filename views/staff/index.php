<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaffSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'first_name',
            'last_name',
    		'bank_account_no',
    		'pran_id',
    		'current_designation',
    		
            // 'email_id:email',
            // 'date_birth',
            // 'date_appointment',
            // 'date_current_desig',
            // 'bank_account_no',
            // 'bank_ifsc',
            // 'bank_name',
            // 'bank_branch',
             'pay_matrix_index',
    		 'pay_matrix_level',
            // 'pran_id',
            // 'current_designation',
            // 'prev_designation',
            // 'category',
            // 'basic_pay_6cpc',
            // 'GPF_number',
            // 'date_joining',
            // 'pan_number',
            // 'date_last_inc',
            // 'is_jan_inc',
            // 'gender',
             'status',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
