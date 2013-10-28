<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'管理员列表'=>array('index'),
	'创建',
);

$this->menu=array(
	array('label'=>'管理员列表', 'url'=>array('index')),
	array('label'=>'管理管理员', 'url'=>array('admin')),
);
?>

<h1>添加管理员</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>