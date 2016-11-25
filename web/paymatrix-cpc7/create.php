<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PaymatrixCpc7 */

$this->title = 'Create Paymatrix Cpc7';
$this->params['breadcrumbs'][] = ['label' => 'Paymatrix Cpc7s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paymatrix-cpc7-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
