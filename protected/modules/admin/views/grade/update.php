<?php
/* @var $this GradeController */
/* @var $model Grade */

$this->breadcrumbs=array(
	'年级管理'=>array('admin'),
	$model->grade_name=>array('view','id'=>$model->grade_id),
	'修改年级',
);

$this->menu=array(
	array('label'=>'添加年级', 'url'=>array('create')),
	array('label'=>'查看该年级', 'url'=>array('view', 'id'=>$model->grade_id)),
	array('label'=>'年级管理', 'url'=>array('admin')),
);
?>

<h1>修改年级 <?php echo $model->grade_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>