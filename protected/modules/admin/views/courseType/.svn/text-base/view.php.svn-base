<?php
/* @var $this CourseTypeController */
/* @var $model CourseType */

$this->breadcrumbs=array(
	'课程类别管理'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'添加课程类别', 'url'=>array('create')),
	array('label'=>'修改该课程类别', 'url'=>array('update', 'id'=>$model->course_type_id)),
	array('label'=>'删除该课程类别', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->course_type_id),'confirm'=>'确定删除此项吗?')),
	array('label'=>'课程类别管理', 'url'=>array('admin')),
);
?>

<h1>课程类别：<?php echo $model->title; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'course_type_id',
		'title',
	),
)); ?>
