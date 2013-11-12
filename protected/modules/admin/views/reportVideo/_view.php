<?php
/* @var $this ReportVideoController */
/* @var $data ReportVideo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_video_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->report_video_id), array('view', 'id'=>$data->report_video_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_id')); ?>:</b>
	<?php echo CHtml::encode($data->report->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('attach_id')); ?>:</b>
	<?php echo CHtml::encode($data->attach->attach_url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ctime')); ?>:</b>
	<?php echo date('Y-m-d H:i:s',CHtml::encode($data->ctime)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('etime')); ?>:</b>
	<?php echo date('Y-m-d H:i:s',CHtml::encode($data->etime)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ord')); ?>:</b>
	<?php echo CHtml::encode($data->ord); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('clicks')); ?>:</b>
	<?php echo CHtml::encode($data->clicks); ?>
	<br />

	*/ ?>

</div>