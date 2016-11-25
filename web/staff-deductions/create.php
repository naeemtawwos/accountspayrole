<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaffDeductions */

$this->title = 'Create Staff Deductions';
$this->params['breadcrumbs'][] = ['label' => 'Staff Deductions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-deductions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
