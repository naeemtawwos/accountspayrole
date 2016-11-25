<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\DeductionsMaster */

$this->title = 'Create Deductions Master';
$this->params['breadcrumbs'][] = ['label' => 'Deductions Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deductions-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
