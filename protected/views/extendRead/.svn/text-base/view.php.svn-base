<?php
/* @var $this ExtendReadController */
/* @var $model ExtendRead */

$this->breadcrumbs=array(
	'Extend Reads'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List ExtendRead', 'url'=>array('index')),
	array('label'=>'Create ExtendRead', 'url'=>array('create')),
	array('label'=>'Update ExtendRead', 'url'=>array('update', 'id'=>$model->extend_read_id)),
	array('label'=>'Delete ExtendRead', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->extend_read_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ExtendRead', 'url'=>array('admin')),
);
?>

<h1>View ExtendRead #<?php echo $model->extend_read_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'extend_read_id',
		'title',
		'report_id',
		'url',
	),
)); ?>
