<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Deductions Monthwises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="deductions-monthwise-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Deductions Monthwise', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'deduction_id',
            'staff_id',
            'payment_id',
            'amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
