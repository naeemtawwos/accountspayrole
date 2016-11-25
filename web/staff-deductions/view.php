<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\StaffDeductions */

$this->title = $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-deductions-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'staff_id' => $model->staff_id, 'deduction_id' => $model->deduction_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'staff_id' => $model->staff_id, 'deduction_id' => $model->deduction_id], [
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
            'staff_id',
            'deduction_id',
            'no_installments',
            'date_first_installment',
            'total_amount',
        ],
    ]) ?>

</div>
