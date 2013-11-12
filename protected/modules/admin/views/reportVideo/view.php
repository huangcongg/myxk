<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */

$this->breadcrumbs=array(
	'讲座视频管理'=>array('admin'),
	$model->name,
);

$this->menu=array(
	//array('label'=>'讲座视频管理', 'url'=>array('index')),
	array('label'=>'添加讲座视频', 'url'=>array('create')),
	array('label'=>'更新讲座视频', 'url'=>array('update', 'id'=>$model->report_video_id)),
	array('label'=>'删除讲座视频', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->report_video_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'讲座视频管理', 'url'=>array('admin')),
);
?>

<h1>查看讲座视频 #<?php echo $model->report_video_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'report_video_id',
		array('name'=>'report_id','value'=>$model->report->title),
		array('name'=>'attach_id','value'=>$model->attach->attach_url),
		'name',
		array('name'=>'ctime','value'=>date("Y-m-d H:i:s",$model->ctime)),
		array('name'=>'etime','value'=>date("Y-m-d H:i:s",$model->etime)),
		'ord',
		'clicks',
	),
)); ?>
