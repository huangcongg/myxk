<?php
/* @var $this SchoolController */
/* @var $model School */

$this->breadcrumbs=array(
	'学校管理'=>array('admin'),
	$model->school_name,
);

$this->menu=array(
	array('label'=>'添加学校', 'url'=>array('create')),
	array('label'=>'修改该学校', 'url'=>array('update', 'id'=>$model->school_id)),
	array('label'=>'删除该学校', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->school_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'学校管理', 'url'=>array('admin')),
);
?>

<h1>学校详情 #<?php echo $model->school_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'school_id',
		'school_name',
	),
)); ?>
