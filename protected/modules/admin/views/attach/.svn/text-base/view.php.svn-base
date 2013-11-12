<?php
/* @var $this AttachController */
/* @var $model Attach */

$this->breadcrumbs=array(
	'Attaches'=>array('index'),
	$model->attach_id,
);

$this->menu=array(
	array('label'=>'List Attach', 'url'=>array('index')),
	array('label'=>'Create Attach', 'url'=>array('create')),
	array('label'=>'Update Attach', 'url'=>array('update', 'id'=>$model->attach_id)),
	array('label'=>'Delete Attach', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->attach_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Attach', 'url'=>array('admin')),
);
?>

<h1>View Attach #<?php echo $model->attach_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'attach_id',
		'attach_url',
		'ctime',
	),
)); ?>
