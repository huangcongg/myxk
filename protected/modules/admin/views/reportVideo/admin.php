<?php
/* @var $this ReportVideoController */
/* @var $model ReportVideo */

$this->breadcrumbs=array(
	'讲座视频管理'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'讲座视频管理', 'url'=>array('admin')),
	array('label'=>'添加讲座视频', 'url'=>array('create')),
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

<h1>讲座视频管理</h1>

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
	'id'=>'report-video-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'report_video_id',
		array('name'=>'report_id','value'=>'$data->report->title'),
		'name',
		array('name'=>'ctime','value'=>'date("Y-m-d H:i:s",$data->ctime)'),
		array('name'=>'etime','value'=>'date("Y-m-d H:i:s",$data->etime)'),
		/*
		'ord',
		'clicks',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
