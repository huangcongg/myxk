<?php
/* @var $this ExpertController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'名师管理',
);

$this->menu=array(
	array('label'=>'添加名师', 'url'=>array('create')),
	array('label'=>'名师管理', 'url'=>array('admin')),
);
?>

<h1>名师管理</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
