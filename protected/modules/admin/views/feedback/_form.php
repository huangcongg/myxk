<?php
/* @var $this FeedbackController */
/* @var $model Feedback */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'feedback-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime'); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'asker'); ?>
		<?php echo $form->textField($model,'asker'); ?>
		<?php echo $form->error($model,'asker'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answer_content'); ?>
		<?php echo $form->textArea($model,'answer_content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'answer_content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answer_time'); ?>
		<?php echo $form->textField($model,'answer_time'); ?>
		<?php echo $form->error($model,'answer_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'answerer'); ?>
		<?php echo $form->textField($model,'answerer'); ?>
		<?php echo $form->error($model,'answerer'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->