<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\DeductionsMaster */
/* @var $form ActiveForm */
?>
<div class="deduction-master">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'deduction_desc') ?>
        <?= $form->field($model, 'deduction_type') ?>
        <?= $form->field($model, 'is_recurring') ?>
        <?= $form->field($model, 'deduction_percent') ?>
        <?= $form->field($model, 'deduction_const') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- deduction-master -->
