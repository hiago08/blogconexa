<div class="form">


<?php $form = $this->beginWidget('GxActiveForm', array(
	'id' => 'comentario-form',
	'enableAjaxValidation' => false,
));
?>

	<p class="note">
		Fields with <span class="required">*</span> are required.
	</p>

	<?php echo $form->errorSummary($model); ?>

		<div class="row">
		<?php echo $form->labelEx($model,'id_post'); ?>
		<?php echo $form->dropDownList($model, 'id_post', GxHtml::listDataEx(::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_post'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'id_usuario'); ?>
		<?php echo $form->dropDownList($model, 'id_usuario', GxHtml::listDataEx(::model()->findAllAttributes(null, true))); ?>
		<?php echo $form->error($model,'id_usuario'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'texto'); ?>
		<?php echo $form->textField($model, 'texto', array('maxlength' => 255)); ?>
		<?php echo $form->error($model,'texto'); ?>
		</div><!-- row -->
		<div class="row">
		<?php echo $form->labelEx($model,'data'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'data',
			'value' => $model->data,
			'options' => array(
				'showButtonPanel' => true,
				'changeYear' => true,
				'dateFormat' => 'yy-mm-dd',
				),
			));
; ?>
		<?php echo $form->error($model,'data'); ?>
		</div><!-- row -->


<?php
echo GxHtml::submitButton('Save');
$this->endWidget();
?>
</div><!-- form -->