<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceMaster */

$this->title = $model->allowances_id;
$this->params['breadcrumbs'][] = ['label' => 'Allowance Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->allowances_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->allowances_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'allowances_id',
            'allowances_desc',
            'allowances_percent',
            'allowances_const',
            'is_recurring',
        ],
    ]) ?>

</div>
