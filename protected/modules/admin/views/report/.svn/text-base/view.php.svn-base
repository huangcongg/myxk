<?php
/* @var $this ReportController */
/* @var $model Report */

$this->breadcrumbs=array(
	'讲座管理'=>array('admin'),
	$model->title,
);

$this->menu=array(
	//array('label'=>'讲座管理', 'url'=>array('index')),
	array('label'=>'添加讲座', 'url'=>array('create')),
	array('label'=>'更新此讲座', 'url'=>array('update', 'id'=>$model->report_id)),
	array('label'=>'删除此讲座', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->report_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'讲座管理', 'url'=>array('admin')),
);
?>

<h1>查看此讲座 #<?php echo $model->report_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'report_id',
		'title',
		array(
			'name'=>'path',
			'type'=>'raw',
			'value'=>CHtml::image($model->path,$model->realname,array(
			'style'=>'max-height:100px; max-width:100px;')),
		),
		'realname',
		'expert_id',
		array(
			'name'=>'desc',
			'type'=>'raw',
			'value'=>$model->desc,
		),
		array('name'=>'ctime','value'=>date('Y-m-d H:i:m',$model->ctime)),
		array('name'=>'etime','value'=>date('Y-m-d H:i:m',$model->etime)),
		'ord',
		'attention',
	),
)); ?>
