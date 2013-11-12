<?php
/* @var $this UserController */
/* @var $model User */

$this->breadcrumbs=array(
	'用户管理'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'添加用户', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#user-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>用户管理</h1>

<p>
你还可以在某个关键词的开始部分输入比较运算符 (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)，用以搜索符合要求的数据。
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'user_id',
		'username',
		'password',
		'email',
		'phone',
        array('name'=>'ctime','value'=>'date("Y-m-d H:i:s", $data->ctime)'),
		/*
		'etime',
		'lasttime',
		'lastip',
		'type',
		'total_points',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
