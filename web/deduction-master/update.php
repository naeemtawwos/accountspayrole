<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionsMaster */

$this->title = 'Update Deductions Master: ' . $model->deduction_id;
$this->params['breadcrumbs'][] = ['label' => 'Deductions Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->deduction_id, 'url' => ['view', 'id' => $model->deduction_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="deductions-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
