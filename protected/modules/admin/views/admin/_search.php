<?php
/* @var $this AdminController */
/* @var $model Admin */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'admin_id'); ?>
		<?php echo $form->textField($model,'admin_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phone'); ?>
		<?php echo $form->textField($model,'phone',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ctime'); ?>
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
        <?php //echo $form->textField($model,'ctime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'etime'); ?>
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
	</div>


	<div class="row">
		<?php echo $form->label($model,'group'); ?>
		<?php echo $form->textField($model,'group'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->