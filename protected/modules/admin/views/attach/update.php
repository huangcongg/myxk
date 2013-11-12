<?php
/* @var $this AttachController */
/* @var $model Attach */

$this->breadcrumbs=array(
	'Attaches'=>array('index'),
	$model->attach_id=>array('view','id'=>$model->attach_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Attach', 'url'=>array('index')),
	array('label'=>'Create Attach', 'url'=>array('create')),
	array('label'=>'View Attach', 'url'=>array('view', 'id'=>$model->attach_id)),
	array('label'=>'Manage Attach', 'url'=>array('admin')),
);
?>

<h1>Update Attach <?php echo $model->attach_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>