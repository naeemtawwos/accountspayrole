<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\AllowanceMaster */

$this->title = 'Create Allowance Master';
$this->params['breadcrumbs'][] = ['label' => 'Allowance Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
