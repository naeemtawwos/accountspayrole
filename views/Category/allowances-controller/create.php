<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AllowancesMonthwise */

$this->title = 'Create Allowances Monthwise';
$this->params['breadcrumbs'][] = ['label' => 'Allowances Monthwises', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowances-monthwise-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
