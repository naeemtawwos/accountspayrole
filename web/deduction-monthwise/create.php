<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DeductionsMonthwise */

$this->title = 'Create Deductions Monthwise';
$this->params['breadcrumbs'][] = ['label' => 'Deductions Monthwises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deductions-monthwise-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
