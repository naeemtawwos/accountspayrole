<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AllowanceMaster */
/* @var $form yii\widgets\ActiveForm */
?>
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<div class="allowance-master-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'allowances_desc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'allowances_percent')->textInput() ?>
    <div class="form-group">
	<?= "<label class='control-label'>Does the Allowance have any particular percentage against the basic or it is constant for all employees</label>"?>
	<?= Html::radioList("allowancetype",false,['percent'=>'Percentage', 'const'=>'Constantt']) ?>   
	</div>
    <?= $form->field($model, 'allowances_const')->textInput() ?>

    <?= $form->field($model, 'is_recurring')->dropDownList([ '0' => 'Non Recurring', '1' => 'Recurring'], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    
    <script>
  $(document).ready(function () {
    $("allowancetype").click(function () {
      var value = $(this).val();
      if (value == 'const') {
        $(".field-allowancesmaster-allowances_percent").show();
        $(".field-allowancesmaster-allowances_const").hide();
      } else if (value == 'No') {
          $(".field-allowancesmaster-allowances_percent").hide();
          $(".field-allowancesmaster-allowances_const").show();
      }
    });
  });
</script>

</div>
