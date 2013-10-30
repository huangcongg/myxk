<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'管理员列表'=>array('index'),
	$model->username=>array('view','id'=>$model->admin_id),
	'更新',
);

$this->menu=array(
//	array('label'=>'管理员列表', 'url'=>array('index')),
	array('label'=>'增加管理员', 'url'=>array('create')),
	array('label'=>'查看该管理员', 'url'=>array('view', 'id'=>$model->admin_id)),
	array('label'=>'管理员列表显示', 'url'=>array('admin')),
);
?>

<h1>修改管理员 <?php echo $model->admin_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>