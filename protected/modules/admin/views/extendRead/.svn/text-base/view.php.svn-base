<?php
/* @var $this ExtendReadController */
/* @var $model ExtendRead */

$this->breadcrumbs=array(
	'拓展阅读管理'=>array('admin'),
	$model->title,
);

$this->menu=array(
	//array('label'=>'拓展阅读管理', 'url'=>array('index')),
	array('label'=>'添加拓展阅读', 'url'=>array('create')),
	array('label'=>'更新拓展阅读', 'url'=>array('update', 'id'=>$model->extend_read_id)),
	array('label'=>'删除拓展阅读', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->extend_read_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理拓展阅读', 'url'=>array('admin')),
);
?>

<h1>查看拓展阅读 #<?php echo $model->extend_read_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'extend_read_id',
		'title',
		'report_id',
		'url',
	),
)); ?>
