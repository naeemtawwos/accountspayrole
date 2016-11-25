<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceMaster */

$this->title = 'Update Allowance Master: ' . $model->allowances_id;
$this->params['breadcrumbs'][] = ['label' => 'Allowance Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->allowances_id, 'url' => ['view', 'id' => $model->allowances_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="allowance-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
