<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\StaffStatus */

$this->title = 'Create Staff Status';
$this->params['breadcrumbs'][] = ['label' => 'Staff Statuses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-status-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
