<?php
/* @var $this ExtendReadController */
/* @var $model ExtendRead */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'report_id'); ?>
		<?php echo $form->dropDownList(
			$model,'report_id',
			CHtml::listData(
				Report::model()->findAll(
					array('order'=>'report_id DESC')
				),
				'report_id','title'
			),		
			array(
				'prompt'=>'请选择',
			)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->