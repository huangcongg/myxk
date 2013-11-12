<?php
/* @var $this ExtendReadDetailController */
/* @var $model ExtendReadDetail */

$this->breadcrumbs=array(
	'拓展阅读列表'=>array('index'),
	'管理拓展阅读',
);

$this->menu=array(
	//array('label'=>'拓展阅读列表', 'url'=>array('index')),
	array('label'=>'添加拓展详细阅读', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#extend-read-detail-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理拓展阅读</h1>

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
	'id'=>'extend-read-detail-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'title',
		'content',
        array(
            'name'=>'ctime',
            'type'=>'datetime',
            'filter'=>false,
        ),
		array(
            'name'=>'etime',
            'type'=>'datetime',
            'filter'=>false,
        ),

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
