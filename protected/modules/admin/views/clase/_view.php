<?php
/* @var $this ClaseController */
/* @var $data Clase */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->class_id), array('view', 'id'=>$data->class_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('class_name')); ?>:</b>
	<?php echo CHtml::encode($data->class_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_id')); ?>:</b>
	<?php echo CHtml::encode($data->grade_id); ?>
	<br />


</div>