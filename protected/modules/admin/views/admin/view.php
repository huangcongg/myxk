<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'管理员列表'=>array('index'),
	$model->username,
);

$this->menu=array(
//	array('label'=>'管理员列表', 'url'=>array('index')),
	array('label'=>'增加一个管理员', 'url'=>array('create')),
	array('label'=>'修改该管理员', 'url'=>array('update', 'id'=>$model->admin_id)),
	array('label'=>'删除该管理员', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->admin_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'管理员列表显示', 'url'=>array('admin')),
);
?>

<h1>管理员详细信息 #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'admin_id',
		'username',
		'email',
		'phone',
		'ctime',
		'etime',
		'regip',
		'lasttime',
		'lastip',
		'group',
	),
)); ?>
