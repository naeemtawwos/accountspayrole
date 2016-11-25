<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Designation */

$this->title = $model->design_id;
$this->params['breadcrumbs'][] = ['label' => 'Designations', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="designation-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->design_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->design_id], [
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
            'design_id',
            'designation_name',
            'design_group',
        ],
    ]) ?>

</div>
