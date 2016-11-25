<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaffAllowances */

$this->title = 'Update Staff Allowances: ' . $model->staff_id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Allowances', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->staff_id, 'url' => ['view', 'staff_id' => $model->staff_id, 'allowance_id' => $model->allowance_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-allowances-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
