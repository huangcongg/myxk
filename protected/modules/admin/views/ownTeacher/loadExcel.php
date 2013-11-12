<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'学生管理'=>array('index'),
	'导入excel',
);

$this->menu=array(
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>导入学生</h1>

<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'user-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'htmlOptions'=>array('enctype'=>'multipart/form-data'),
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note"></p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model,'excel'); ?>
        <?php echo $form->fileField($model,'excel',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'excel'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('导入'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->