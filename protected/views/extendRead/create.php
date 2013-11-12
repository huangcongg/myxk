<?php
/* @var $this ExtendReadController */
/* @var $model ExtendRead */

$this->breadcrumbs=array(
	'Extend Reads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ExtendRead', 'url'=>array('index')),
	array('label'=>'Manage ExtendRead', 'url'=>array('admin')),
);
?>

<h1>Create ExtendRead</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>