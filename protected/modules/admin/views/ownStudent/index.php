<?php
/* @var $this UserController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'用户列表',
);

$this->menu=array(
	array('label'=>'添加用户', 'url'=>array('create')),
	array('label'=>'管理用户', 'url'=>array('admin')),
);
?>

<h1>用户列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
