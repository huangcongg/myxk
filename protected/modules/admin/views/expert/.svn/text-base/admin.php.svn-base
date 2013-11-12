<?php
/* @var $this ExpertController */
/* @var $model Expert */

$this->breadcrumbs=array(
	'名师管理'=>array('admin'),
	'名师管理',
);

$this->menu=array(
	array('label'=>'名师管理', 'url'=>array('admin')),
	array('label'=>'添加名师', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#expert-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>名师管理</h1>

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
	'id'=>'expert-grid',
	'dataProvider'=>$model->search(),
	'columns'=>array(
		'expert_id',
		array(
			'name'=>'path',
			'type'=>'raw',
			'value'=>'CHtml::image($data->path,$data->realname,array("style"=>"max-height:100px;max-width:100px"))',
		),
		'realname',
		'subject',
		/*
		'desc',
		'achieve',
		'quote_text',
		'email',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<script>
	$(".filters").hide();
</script>
