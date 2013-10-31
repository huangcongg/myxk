<?php
/* @var $this ClaseController */
/* @var $model Clase */

$this->breadcrumbs=array(
	'班级管理'=>array('admin'),
	$model->class_name=>array('view','id'=>$model->class_id),
	'修改班级',
);

$this->menu=array(
	array('label'=>'添加班级', 'url'=>array('create')),
	array('label'=>'查看班级', 'url'=>array('view', 'id'=>$model->class_id)),
	array('label'=>'管理班级', 'url'=>array('admin')),
);
?>

<h1>修改班级 <?php echo $model->class_name; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>