<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */

$this->breadcrumbs=array(
	'讲座视频管理'=>array('admin'),
	$model->name=>array('view','id'=>$model->report_video_id),
	'更新',
);

$this->menu=array(
	//array('label'=>'讲座视频管理', 'url'=>array('index')),
	array('label'=>'添加讲座视频', 'url'=>array('create')),
	array('label'=>'查看讲座视频', 'url'=>array('view', 'id'=>$model->report_video_id)),
	array('label'=>'讲座视频管理', 'url'=>array('admin')),
);
?>

<h1>更新讲座视频 <?php echo $model->report_video_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>