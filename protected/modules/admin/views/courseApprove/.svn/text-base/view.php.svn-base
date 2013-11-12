<?php
/* @var $this CourseApproveController */
/* @var $model Course */

$this->breadcrumbs=array(
	'Courses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List Course', 'url'=>array('index')),
	array('label'=>'Create Course', 'url'=>array('create')),
	array('label'=>'Update Course', 'url'=>array('update', 'id'=>$model->course_id)),
	array('label'=>'Delete Course', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->course_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Course', 'url'=>array('admin')),
);
?>

<h1>View Course #<?php echo $model->course_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'course_id',
		'report_title',
		'report_id',
		'title',
		'school',
		'Lecturer',
		'ctime',
		'student_num',
		'attention',
		'starttime',
		'brief',
		'introduce',
		'content',
		'status',
		'reviewer',
		'reviewer_id',
		'resourceids',
	),
)); ?>
