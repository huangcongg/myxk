<?php
/* @var $this ExpertSubjectController */
/* @var $model ExpertSubject */

$this->breadcrumbs=array(
	'学科管理'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'添加学科', 'url'=>array('create')),
	array('label'=>'修改该学科', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'删除该学科', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'确定删除吗?')),
	array('label'=>'管理学科', 'url'=>array('admin')),
);
?>

<h1>查看学科 <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'ord',
	),
)); ?>
