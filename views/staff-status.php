<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffStatus */
/* @var $form ActiveForm */
?>
<div class="staff-status">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'status') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- staff-status -->
