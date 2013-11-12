<?php
/* @var $this ExtendReadController */
/* @var $model ExtendRead */

$this->breadcrumbs=array(
	'拓展阅读管理'=>array('admin'),
	$model->title=>array('view','id'=>$model->extend_read_id),
	'更新',
);

$this->menu=array(
	//array('label'=>'拓展阅读管理', 'url'=>array('index')),
	array('label'=>'添加拓展阅读', 'url'=>array('create')),
	array('label'=>'查看拓展阅读', 'url'=>array('view', 'id'=>$model->extend_read_id)),
	array('label'=>'管理拓展阅读', 'url'=>array('admin')),
);
?>

<h1>更新拓展阅读 <?php echo $model->extend_read_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>