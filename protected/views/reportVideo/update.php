<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */

$this->breadcrumbs=array(
	'Report Videos'=>array('index'),
	$model->name=>array('view','id'=>$model->report_video_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReportVideo', 'url'=>array('index')),
	array('label'=>'Create ReportVideo', 'url'=>array('create')),
	array('label'=>'View ReportVideo', 'url'=>array('view', 'id'=>$model->report_video_id)),
	array('label'=>'Manage ReportVideo', 'url'=>array('admin')),
);
?>

<h1>Update ReportVideo <?php echo $model->report_video_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>