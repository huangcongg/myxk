<?php
/* @var $this CourseTypeController */
/* @var $model CourseType */

$this->breadcrumbs=array(
	'课程类别管理'=>array('index'),
	$model->title=>array('view','id'=>$model->course_type_id),
	'修改',
);

$this->menu=array(
	array('label'=>'添加课程类别', 'url'=>array('create')),
	array('label'=>'查看课程类别', 'url'=>array('view', 'id'=>$model->course_type_id)),
	array('label'=>'课程类别管理', 'url'=>array('admin')),
);
?>

<h1>修改课程类别： <?php echo $model->title; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>