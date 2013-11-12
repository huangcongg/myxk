<?php
/* @var $this CourseTypeController */
/* @var $data CourseType */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('course_type_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->course_type_id), array('view', 'id'=>$data->course_type_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />


</div>