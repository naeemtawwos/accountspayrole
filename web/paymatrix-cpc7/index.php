<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PaymatrixCpc7Search */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paymatrix Cpc7s';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paymatrix-cpc7-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Paymatrix Cpc7', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'index',
            'level',
            'fixation',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
