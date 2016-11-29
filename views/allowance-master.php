<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AllowancesMaster */
/* @var $form ActiveForm */
?>
<div class="allowance-master">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'allowances_desc') ?>
        <?= $form->field($model, 'is_recurring') ?>
        <?= $form->field($model, 'allowances_percent') ?>
        <?= $form->field($model, 'allowances_const') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- allowance-master -->
