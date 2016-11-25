<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\StaffCategory */
/* @var $form ActiveForm */
?>
<div class="category">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'category') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- category -->
