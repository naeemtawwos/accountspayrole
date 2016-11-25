<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaffDeductions */

$this->title = 'Update Staff Deductions: ' . $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->staff_id, 'url' => ['view', 'staff_id' => $model->staff_id, 'deduction_id' => $model->deduction_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-deductions-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
