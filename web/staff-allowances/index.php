<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\StaffAllowancesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Staff Allowances';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="staff-allowances-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Staff Allowances', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'staff_id',
            'allowance_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
