<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'教师管理'=>array('index'),
	'添加教师',
);

$this->menu=array(
	array('label'=>'管理', 'url'=>array('admin')),
);
?>

<h1>添加教师</h1>

<?php $this->renderPartial('_form', array('model'=>$model,'student'=>$student)); ?>