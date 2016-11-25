<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deductions Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deductions-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Deductions Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'deduction_id',
            'deduction_desc',
            'deduction_type',
            'deduction_percent',
            'deduction_const',
            // 'is_recurring',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
