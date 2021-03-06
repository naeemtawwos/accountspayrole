<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Designation */

$this->title = 'Update Designation: ' . $model->design_id;
$this->params['breadcrumbs'][] = ['label' => 'Designations', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->design_id, 'url' => ['view', 'id' => $model->design_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="designation-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
