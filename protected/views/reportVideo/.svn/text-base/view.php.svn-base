<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */

$this->breadcrumbs=array(
	'Report Videos'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List ReportVideo', 'url'=>array('index')),
	array('label'=>'Create ReportVideo', 'url'=>array('create')),
	array('label'=>'Update ReportVideo', 'url'=>array('update', 'id'=>$model->report_video_id)),
	array('label'=>'Delete ReportVideo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->report_video_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReportVideo', 'url'=>array('admin')),
);
?>

<h1>View ReportVideo #<?php echo $model->report_video_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'report_video_id',
		'report_id',
		'attach_id',
		'name',
		'ctime',
		'etime',
		'ord',
		'clicks',
	),
)); ?>
