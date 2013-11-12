<?php
/* @var $this ExpertController */
/* @var $model Expert */
/* @var $form CActiveForm */
?>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/protected/extensions/ckeditor/ckeditor.js"></script><!--引入相关js-->
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/protected/extensions/ckfinder/ckfinder.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/protected/extensions/ckeditor/config.js"></script><!--引入ckeditor配置-->
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/protected/extensions/ckeditor/contents.css" rel="stylesheet">
	<script>
        $(function(){
            CKEDITOR.replace( 'Expert_desc',
			{
			   
				width:690,
				height:200,
				//自定义工具栏,这里不写,默认显示全部
				toolbar :
				[
				     ['Format','FontSize','Font'],
				     ['TextColor', '-' ,'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink','-','Cut','Copy','Paste','-','Image','Flash']
				],	
				
			});
            CKEDITOR.replace( 'Expert_achieve',
			{
			   
				width:690,
				height:200,
				//自定义工具栏,这里不写,默认显示全部
				toolbar :
				[
				     ['Format','FontSize','Font'],
				     ['TextColor', '-' ,'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink','-','Cut','Copy','Paste','-','Image','Flash']
				]				
				
			});
            CKEDITOR.replace( 'Expert_quote_text',
			{
			   
				width:690,
				height:200,
				//自定义工具栏,这里不写,默认显示全部
				toolbar :
				[
				     ['Format','FontSize','Font'],
				     ['TextColor', '-' ,'Bold', 'Italic', '-', 'NumberedList', 'BulletedList', '-', 'Link','Unlink','-','Cut','Copy','Paste','-','Image','Flash']
				]				
				
			});
        });
    </script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'expert-form','htmlOptions'=>array('enctype'=>'multipart/form-data'),
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带 <span class="required">*</span> 的字段为必填项.</p>

	<?php echo $form->errorSummary($model); ?>
    <input type="hidden" name="oldpath" value="<?php echo $model->path;?>" />
    <?php
    	if($model->path){
	?>
	<div class="row">
    	现有头像
        <img src="<?php echo $model->path;?>" style="max-height:100px; max-width:100px;" />
	</div>
	<?php		
		}
	?>
	<div class="row">
		<?php echo $form->labelEx($model,'path'); ?>
		<?php echo $form->FileField($model,'path',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'path'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'realname'); ?>
		<?php echo $form->textField($model,'realname',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'realname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'subject'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'desc'); ?>

		<?php echo $form->textArea($model,'desc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'desc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'achieve'); ?>
		<?php echo $form->textArea($model,'achieve',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'achieve'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quote_text'); ?>
		<?php echo $form->textArea($model,'quote_text',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'quote_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->