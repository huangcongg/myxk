<?php
/* @var $this AdminController */
/* @var $model Admin */

$this->breadcrumbs=array(
	'管理员列表'=>array('index'),
	'管理',
);

$this->menu=array(
	array('label'=>'管理员管理', 'url'=>array('index')),
	array('label'=>'创建管理员', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#admin-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>管理管理员</h1>

<p>
你可以在关键词比较运算符搜索， (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>)
</p>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'admin-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'admin_id',
		'username',
		'email',
		'phone',
        array(
            'name'=>'ctime',
            'type'=>'date',
            'filter'=>false,
        ),
        array(
            'name'=>'etime',
            'type'=>'date',
            'filter'=>false,
        ),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
