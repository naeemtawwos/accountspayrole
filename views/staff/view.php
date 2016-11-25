<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Staff */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Staff', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'first_name',
            'last_name',
            'mobile_number',
            'mobile_number2',
            'email_id:email',
            'date_birth',
            'date_appointment',
            'date_current_desig',
            'bank_account_no',
            'bank_ifsc',
            'bank_name',
            'bank_branch',
            'pay_matrix_index',
    		'pay_matrix_level',
            'pran_id',
            'current_designation',
            'prev_designation',
            'category',
            'basic_pay_6cpc',
            'GPF_number',
            'date_joining',
            'pan_number',
            'date_last_inc',
            'is_jan_inc',
            'gender',
            'status',
        ],
    ]) ?>

</div>
