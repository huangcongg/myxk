<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'report-video-form','htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带 <span class="required">*</span> 的字段为必填项.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'report_id'); ?>
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
			)
		); ?>
		<?php echo $form->error($model,'report_id'); ?>
	</div>

	<div class="row">
		<input type="hidden" value="<?php echo $model->attach_id;?>" name="oldattach_id" />
		<?php echo $form->labelEx($model,'attach_id'); ?>
		<?php echo $form->fileField($model,'attach_id'); ?>
		<?php echo $form->error($model,'attach_id'); ?>
        
        <?php
        	if($model->attach_id){
				echo '当前视频路径'.$model->attach->attach_url;
			}
		?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'name'); ?>
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
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->