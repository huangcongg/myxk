<?php
/* @var $this AttachController */
/* @var $data Attach */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('attach_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->attach_id), array('view', 'id'=>$data->attach_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attach_url')); ?>:</b>
	<?php echo CHtml::encode($data->attach_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo CHtml::encode($data->ctime); ?>
	<br />


</div>