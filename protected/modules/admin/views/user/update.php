<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户管理'=>array('admin'),
	$model->username=>array('view','id'=>$model->user_id),
	'修改',
);

$this->menu=array(
	array('label'=>'添加用户', 'url'=>array('create')),
	array('label'=>'查看用户', 'url'=>array('view', 'id'=>$model->user_id)),
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>

<h1>修改用户 <?php echo $model->user_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>