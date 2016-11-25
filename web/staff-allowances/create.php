<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaffAllowances */

$this->title = 'Create Staff Allowances';
$this->params['breadcrumbs'][] = ['label' => 'Staff Allowances', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-allowances-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
