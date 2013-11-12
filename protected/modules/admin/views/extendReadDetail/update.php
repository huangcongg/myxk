<?php
/* @var $this ExtendReadDetailController */
/* @var $model ExtendReadDetail */

$this->breadcrumbs=array(
	'拓展阅读列表'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'拓展阅读列表', 'url'=>array('index')),
	array('label'=>'创建拓展阅读', 'url'=>array('create')),
	array('label'=>'查看拓展阅读', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'管理拓展阅读', 'url'=>array('admin')),
);
?>

<h1>更新拓展阅读 <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>