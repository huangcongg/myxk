<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'report_video_id'); ?>
		<?php echo $form->textField($model,'report_video_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'report_id'); ?>
		<?php echo $form->textField($model,'report_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'attach_id'); ?>
		<?php echo $form->textField($model,'attach_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctime'); ?>
		<?php echo $form->textField($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'etime'); ?>
		<?php echo $form->textField($model,'etime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ord'); ?>
		<?php echo $form->textField($model,'ord'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clicks'); ?>
		<?php echo $form->textField($model,'clicks'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->