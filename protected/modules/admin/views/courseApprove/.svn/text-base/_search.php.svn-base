<?php
/* @var $this CourseApproveController */
/* @var $model Course */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'course_id'); ?>
		<?php echo $form->textField($model,'course_id'); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'report_title'); ?>
<!--		--><?php //echo $form->textField($model,'report_title'); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'report_id'); ?>
<!--		--><?php //echo $form->textField($model,'report_id'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'school'); ?>
		<?php echo $form->textField($model,'school',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Lecturer'); ?>
		<?php echo $form->textField($model,'Lecturer',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime'); ?>
	</div>


	<div class="row">
		<?php echo $form->label($model,'starttime'); ?>
		<?php echo $form->textField($model,'starttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->