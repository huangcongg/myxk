<?php
/* @var $this ClaseController */
/* @var $model Clase */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'clase_id'); ?>
		<?php echo $form->textField($model,'clase_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'clase_name'); ?>
		<?php echo $form->textField($model,'clase_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'grade_id'); ?>
		<?php echo $form->textField($model,'grade_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->