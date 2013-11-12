<?php
/* @var $this ReportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'讲座管理',
);

$this->menu=array(
	array('label'=>'添加讲座', 'url'=>array('create')),
	array('label'=>'讲座管理', 'url'=>array('admin')),
);
?>

<h1>Reports</h1>

<?php
	$this->widget('zii.widgets.CListView', array(
		'dataProvider'=>$dataProvider,
		'itemView'=>'_view',
	));
?>
