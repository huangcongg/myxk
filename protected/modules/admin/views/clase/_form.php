<?php
/* @var $this ClaseController */
/* @var $model Clase */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'clase-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>的为必填项.</p>

	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'class_name'); ?>
		<?php echo $form->textField($model,'class_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'class_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'grade_id'); ?>
		<?php echo $form->dropDownList($model,'school_id',School::items(),
            array(
                'ajax'=> array(
                    'type'=>'POST', //request type
                    'url'=>CController::createUrl('/admin/grade/dynamicgrade'), //url to call.
                    'update'=>'#Clase_grade_id', //selector to update
                    'data'=>array('school_id'=>'js:this.value')
                ))); ?>
        <?php echo $form->dropDownList($model,'grade_id',array()); ?>

		<?php echo $form->error($model,'grade_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->