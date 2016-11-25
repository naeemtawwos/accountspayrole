<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\StaffStatus */

$this->title = 'Update Staff Status: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Staff Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="staff-status-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
