<?php
/* @var $this ClaseController */
/* @var $model Clase */

$this->breadcrumbs=array(
	'班级管理'=>array('admin'),
	$model->clase_id,
);

$this->menu=array(
	array('label'=>'添加班级', 'url'=>array('create')),
	array('label'=>'修改该班级', 'url'=>array('update', 'id'=>$model->clase_id)),
	array('label'=>'删除该班级', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->clase_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'班级管理', 'url'=>array('admin')),
);
?>

<h1>查看班级 #<?php echo $model->clase_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'clase_id',
		'clase_name',
		'grade.grade_name',
        'grade.school.school_name',
	),
)); ?>
