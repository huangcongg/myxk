<?php
/* @var $this ReportVideoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'讲座视频管理',
);

$this->menu=array(
	array('label'=>'添加讲座视频', 'url'=>array('create')),
	array('label'=>'讲座视频管理', 'url'=>array('admin')),
);
?>

<h1>讲座视频管理</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
