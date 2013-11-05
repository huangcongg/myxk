<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户管理'=>array('index'),
	$model->username,
);

$this->menu=array(
	array('label'=>'添加用户', 'url'=>array('create')),
	array('label'=>'修改该用户', 'url'=>array('update', 'id'=>$model->user_id)),
	array('label'=>'删除该用户', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->user_id),'confirm'=>'你确定要删除这个项目吗?')),
	array('label'=>'管理用户', 'url'=>array('admin')),
);
?>

<h1>查看用户 #<?php echo $model->username; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$student,
	'attributes'=>array(
		'user.user_id',
		'user.username',
		'user.email',
		'user.phone',
		array('name'=>'user.ctime','type'=>'datetime'),
        array('name'=>'user.etime','type'=>'datetime'),
        array('name'=>'user.lasttime','type'=>'datetime'),
		'lastip',
		'type',
		'total_points',
        'realname',
        'school.school_name',
        'grade.grade_name',
        'clase.clase_name',
	),
)); ?>
