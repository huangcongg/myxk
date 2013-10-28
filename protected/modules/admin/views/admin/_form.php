<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'admin-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带<span class="required">*</span>的字段为必填。</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ctime'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'language'=>'zh_cn',
            'model'=>$model,
            'attribute'=>'ctime',
            'options' => array(
                'dateFormat'=>'yy-mm-dd', //database save format
                //'altFormat'=>'mm-dd-yy' //display format
                //'showAnim'=>'fold',
                //'yearRange'=>'-3:+3'
            ),
            'htmlOptions'=>array(
                'readonly'=>'readonly',
                'style'=>'width:90px;',
            )
        ));?>
		<?php echo $form->error($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etime'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'language'=>'zh_cn',
            'model'=>$model,
            'attribute'=>'etime',
            'options' => array(
                'dateFormat'=>'yy-mm-dd', //database save format
                //'altFormat'=>'mm-dd-yy' //display format
                //'showAnim'=>'fold',
                //'yearRange'=>'-3:+3'
            ),
            'htmlOptions'=>array(
                'readonly'=>'readonly',
                'style'=>'width:90px;',
            )
        ));?>
		<?php echo $form->error($model,'etime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'regip'); ?>
		<?php echo $form->textField($model,'regip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'regip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lasttime'); ?>
        <?php
        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
            'language'=>'zh_cn',
            'model'=>$model,
            'attribute'=>'lasttime',
            'options' => array(
                'dateFormat'=>'yy-mm-dd', //database save format
                //'altFormat'=>'mm-dd-yy' //display format
                //'showAnim'=>'fold',
                //'yearRange'=>'-3:+3'
            ),
            'htmlOptions'=>array(
                'readonly'=>'readonly',
                'style'=>'width:90px;',
            )
        ));?>
		<?php echo $form->error($model,'lasttime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lastip'); ?>
		<?php echo $form->textField($model,'lastip',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'lastip'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group'); ?>
		<?php echo $form->textField($model,'group'); ?>
		<?php echo $form->error($model,'group'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '增加' : '提交修改'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->