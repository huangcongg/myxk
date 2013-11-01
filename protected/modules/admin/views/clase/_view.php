<?php
/* @var $this ClaseController */
/* @var $data Clase */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('clase_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->clase_id), array('view', 'id'=>$data->clase_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('clase_name')); ?>:</b>
	<?php echo CHtml::encode($data->clase_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grade_id')); ?>:</b>
	<?php echo CHtml::encode($data->grade_id); ?>
	<br />


</div>