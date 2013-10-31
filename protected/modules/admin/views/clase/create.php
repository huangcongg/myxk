<?php
/* @var $this ClaseController */
/* @var $model Clase */

$this->breadcrumbs=array(
	'班级管理'=>array('admin'),
	'增加班级',
);

$this->menu=array(
	array('label'=>'班级管理', 'url'=>array('admin')),
);
?>

<h1>增加班级</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>