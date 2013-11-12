<?php
/* @var $this CourseApproveController */
/* @var $model Course */

$this->breadcrumbs=array(
	'课程审核',
);

$this->menu=array(
//	array('label'=>'Create Course', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#course-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>课程审核</h1>

<p>
你还可以输入比较比较运算符辅助搜索，但是必须在关键词的最开始处。(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'course-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'course_id',
		'report_title',
		'report_id',
		'title',
		'school',
		'Lecturer',
        'status',
		/*
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
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
