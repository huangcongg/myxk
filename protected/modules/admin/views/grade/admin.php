<?php
/* @var $this GradeController */
/* @var $model Grade */

$this->breadcrumbs=array(
	'年级管理',
);

$this->menu=array(
	array('label'=>'增加年级', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#grade-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>年级管理</h1>

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
	'id'=>'grade-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'grade_id',
		'grade_name',
		'school_id',
        array(
            'name'=>'school_id',
            'value'=>'$data->school->school_name'
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
