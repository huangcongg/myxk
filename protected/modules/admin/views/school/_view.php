<?php
/* @var $this SchoolController */
/* @var $data School */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->school_id), array('view', 'id'=>$data->school_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_name')); ?>:</b>
	<?php echo CHtml::encode($data->school_name); ?>
	<br />


</div>