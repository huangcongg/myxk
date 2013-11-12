<?php
/* @var $this ExtendReadController */
/* @var $model ExtendRead */

$this->breadcrumbs=array(
	'拓展阅读管理'=>array('admin'),
	'添加',
);

$this->menu=array(
	array('label'=>'拓展阅读管理', 'url'=>array('admin')),
);
?>

<h1>添加拓展阅读</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>