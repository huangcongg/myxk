<?php
/* @var $this GradeController */
/* @var $model Grade */

$this->breadcrumbs=array(
	'年级管理'=>array('admin'),
	$model->grade_name,
);

$this->menu=array(

	array('label'=>'添加年级', 'url'=>array('create')),
	array('label'=>'修改该年级', 'url'=>array('update', 'id'=>$model->grade_id)),
	array('label'=>'删除该年级', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->grade_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'年级管理', 'url'=>array('admin')),
);
?>

<h1>年级详情 #<?php echo $model->grade_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'grade_id',
		'grade_name',
		'school.school_name'
	),
)); ?>
