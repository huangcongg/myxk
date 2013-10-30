<?php
/* @var $this AdminController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'管理员管理',
);

$this->menu=array(
	array('label'=>'添加管理员', 'url'=>array('create')),
	array('label'=>'管理员列表显示', 'url'=>array('admin')),
);
?>

<h1>管理员列表</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
