<?php
/* @var $this ExpertController */
/* @var $model Expert */

$this->breadcrumbs=array(
	'名师管理'=>array('admin'),
	'添加名师',
);

$this->menu=array(
	array('label'=>'名师管理', 'url'=>array('admin')),
);
?>

<h1>添加名师信息</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>