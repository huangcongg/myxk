<?php
/* @var $this ReportController */
/* @var $model Report */

$this->breadcrumbs=array(
	'讲座管理'=>array('admin'),
	'管理',
);

$this->menu=array(
	array('label'=>'讲座管理', 'url'=>array('admin')),
	array('label'=>'添加讲座', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#report-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>讲座管理</h1>

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
	'id'=>'report-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'report_id',
		'title',
		'realname',
/*		array(
			'name'=>'desc',
			'type'=>'raw',
			'value'=>'$data->desc',
		),*/
		array(
			'name'=>'ctime',
			'type'=>'raw',
			'value'=>'date("Y-m-d H:i:s",$data->ctime)',
		),
		/*
		'etime',
		'ord',
		'attention',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
