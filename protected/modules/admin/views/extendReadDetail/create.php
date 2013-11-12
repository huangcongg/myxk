<?php
/* @var $this ExtendReadDetailController */
/* @var $model ExtendReadDetail */

$this->breadcrumbs=array(
	'拓展阅读管理'=>array('index'),
	'添加拓展阅读',
);

$this->menu=array(
	//array('label'=>'拓展阅读列表', 'url'=>array('index')),
	array('label'=>'拓展阅读管理', 'url'=>array('admin')),
);
?>

<h1>添加拓展阅读</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>