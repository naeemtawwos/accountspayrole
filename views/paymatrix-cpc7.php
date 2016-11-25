<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaymatrixCpc7 */
/* @var $form ActiveForm */
?>
<div class="paymatrix-cpc7">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'index') ?>
        <?= $form->field($model, 'level') ?>
        <?= $form->field($model, 'fixation') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- paymatrix-cpc7 -->
