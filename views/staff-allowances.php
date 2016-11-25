<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffAllowances */
/* @var $form ActiveForm */
?>
<div class="staff-allowances">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'staff_id') ?>
        <?= $form->field($model, 'allowance_id') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- staff-allowances -->
