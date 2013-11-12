<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-video-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'report_id'); ?>
		<?php echo $form->textField($model,'report_id'); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attach_id'); ?>
		<?php echo $form->textField($model,'attach_id'); ?>
		<?php echo $form->error($model,'attach_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime'); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etime'); ?>
		<?php echo $form->textField($model,'etime'); ?>
		<?php echo $form->error($model,'etime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ord'); ?>
		<?php echo $form->textField($model,'ord'); ?>
		<?php echo $form->error($model,'ord'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'clicks'); ?>
		<?php echo $form->textField($model,'clicks'); ?>
		<?php echo $form->error($model,'clicks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->