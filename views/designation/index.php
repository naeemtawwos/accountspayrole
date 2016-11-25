<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Designations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Designation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'design_id',
            'designation_name',
            'design_group',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
