<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\AllowancesMonthwiseSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Allowances Monthwises';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="allowances-monthwise-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Allowances Monthwise', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'allowance_id',
            'staff_id',
            'payment_id',
            'amount',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
