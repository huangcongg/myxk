<?php
/* @var $this ExtendReadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Extend Reads',
);

$this->menu=array(
	array('label'=>'Create ExtendRead', 'url'=>array('create')),
	array('label'=>'Manage ExtendRead', 'url'=>array('admin')),
);
?>

<h1>Extend Reads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
