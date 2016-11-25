<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Designation */
/* @var $form ActiveForm */
?>
<div class="designation">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'designation_name') ?>
        <?= $form->field($model, 'design_group') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- designation -->
