<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowance Masters';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowance-master-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Allowance Master', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'allowances_id',
            'allowances_desc',
            'allowances_percent',
            'allowances_const',
            'is_recurring',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
