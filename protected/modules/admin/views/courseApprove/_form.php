<?php
/* @var $this CourseApproveController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'course-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'report_title'); ?>
		<?php echo $form->textField($model,'report_title'); ?>
		<?php echo $form->error($model,'report_title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'report_id'); ?>
		<?php echo $form->textField($model,'report_id'); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'school'); ?>
		<?php echo $form->textField($model,'school',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'school'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Lecturer'); ?>
		<?php echo $form->textField($model,'Lecturer',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'Lecturer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime'); ?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'student_num'); ?>
		<?php echo $form->textField($model,'student_num'); ?>
		<?php echo $form->error($model,'student_num'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'attention'); ?>
		<?php echo $form->textField($model,'attention'); ?>
		<?php echo $form->error($model,'attention'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'starttime'); ?>
		<?php echo $form->textField($model,'starttime'); ?>
		<?php echo $form->error($model,'starttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brief'); ?>
		<?php echo $form->textArea($model,'brief',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'brief'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduce'); ?>
		<?php echo $form->textArea($model,'introduce',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'introduce'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reviewer'); ?>
		<?php echo $form->textField($model,'reviewer',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'reviewer'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'reviewer_id'); ?>
		<?php echo $form->textField($model,'reviewer_id'); ?>
		<?php echo $form->error($model,'reviewer_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'resourceids'); ?>
		<?php echo $form->textArea($model,'resourceids',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'resourceids'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->