<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AllowancesMonthwise */

$this->title = 'Update Allowances Monthwise: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Allowances Monthwises', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="allowances-monthwise-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
