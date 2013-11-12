<?php
/* @var $this ExpertController */
/* @var $model Expert */

$this->breadcrumbs=array(
	'名师管理'=>array('admin'),
	$model->realname,
);

$this->menu=array(
	//array('label'=>'名师管理', 'url'=>array('index')),
	array('label'=>'添加名师', 'url'=>array('create')),
	array('label'=>'修改此名师', 'url'=>array('update', 'id'=>$model->expert_id)),
	array('label'=>'删除此名师', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->expert_id),'confirm'=>'你确认删除此名师，如果删除将会自动删除名师下对应的讲座。。。')),
	array('label'=>'名师管理', 'url'=>array('admin')),
);
?>

<h1>查看名师信息 <?php echo $model->realname; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'expert_id',
		array(
			'name'=>'path',
			'type'=>'raw',
			'value'=>CHtml::image($model->path,$model->realname,array(
			'style'=>'max-height:100px; max-width:100px;')),
		),
		'realname',
		'subject',
		array(
			'name'=>'desc',
			'type'=>'raw',
			'value'=>$model->desc,
		),
		array(
			'name'=>'achieve',
			'type'=>'raw',
			'value'=>$model->achieve,
		),
		array(
			'name'=>'quote_text',
			'type'=>'raw',
			'value'=>$model->quote_text,
		),
		'email',
	),
)); ?>
