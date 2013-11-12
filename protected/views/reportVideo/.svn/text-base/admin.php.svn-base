<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */

$this->breadcrumbs=array(
	'Report Videos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ReportVideo', 'url'=>array('index')),
	array('label'=>'Create ReportVideo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#report-video-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Report Videos</h1>

<p>
你还可以输入比较比较运算符辅助搜索，但是必须在关键词的最开始处。(<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'report-video-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'report_video_id',
		'report_id',
		'attach_id',
		'name',
		'ctime',
		'etime',
		/*
		'ord',
		'clicks',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
